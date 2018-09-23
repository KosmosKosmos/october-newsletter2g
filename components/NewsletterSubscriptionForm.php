<?php namespace KosmosKosmos\Newsletter2Go\Components;

use Validator;
use Cms\Classes\ComponentBase;
use October\Rain\Exception\ApplicationException;
use KosmosKosmos\Newsletter2Go\Facades\Newsletter2Go;

class NewsletterSubscriptionForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Subscription Form',
            'description' => 'Simple form with first_name, last_name, email'
        ];
    }

    public function defineProperties()
    {
        return [
            "form_id" => [
                "title" => "FormId",
                "description" => "As given from Newsletter2Go",
                "default" => "",
                "type" => "string",
                'validationPattern' => '^[0-9A-Za-z\-]+$',
                'validationMessage' => 'Only Numbers and Letters',
                'required' => true
             ]
        ];
    }

    public function onSubmit() {

        $validator = Validator::make(
                post(),
                [
                        'name' => 'required',
                        'email' => 'required|email'
                ]
        );

        if ($validator->fails()) {
            throw new ApplicationException("kosmoskosmos.newsletter2go::lang.newsletter_subscription_form.fill_in_required_inputs");
        }

        $names = explode(" ",post("name"));

        $first_name = array_shift($names);
        $last_name = (count($names)) ? implode(" ", $names) : "";

        $response = Newsletter2Go::register(
                $first_name,
                $last_name,
                post("email"),
                $this->property('form_id')
        );

        if ($response->getStatusCode() == 201) {
            return $response->getReasonPhrase();
        } else {
            throw new ApplicationException($response->getStatusCode() . ": " . $response->getReasonPhrase());
        }

    }

}
