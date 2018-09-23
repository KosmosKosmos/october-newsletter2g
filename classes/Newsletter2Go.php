<?php
    /**
     * Created by PhpStorm.
     * User: kosmo
     * Date: 22.09.18
     * Time: 23:01
     */

    namespace KosmosKosmos\Newsletter2Go\Classes;

    use GuzzleHttp\Client;
    use GuzzleHttp\Exception\ClientException;

    class Newsletter2Go {

        const Newsletter2GoApiUrl = "https://api.newsletter2go.com/";

        public function register($first_name, $last_name, $email, $form_id) {

            $action = "forms/submit/";

            $route = self::Newsletter2GoApiUrl.$action.$form_id;

            $data = [
              "recipient" => [
                  "email" => $email,
                  "first_name" => $first_name,
                  "last_name" => $last_name,
              ]
            ];

            $headers = [
                'Content-type' => 'application/json'
            ];

            $client = new Client();
            $result = $client->post($route,
                    [
                        "headers" => $headers,
                        "body" => json_encode($data)
                    ]
            );

            return $result;

        }

    }