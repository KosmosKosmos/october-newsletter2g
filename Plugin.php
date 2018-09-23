<?php namespace KosmosKosmos\Newsletter2Go;

use Backend;
use System\Classes\PluginBase;

/**
 * Newsletter2Go Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Newsletter2Go Connector',
            'description' => 'Provides basic functionality to connect OctoberCMS with newsletter2go',
            'author'      => 'KosmosKosmos',
            'icon'        => 'icon-envelope-square'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'KosmosKosmos\Newsletter2Go\Components\NewsletterSubscriptionForm' => 'newsletterSubscriptionForm',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'kosmoskosmos.newsletter2go.some_permission' => [
                'tab' => 'Newsletter2Go',
                'label' => 'Manage Newsletter2Go'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'newsletter2go' => [
                'label'       => 'Newsletter2Go',
                'url'         => Backend::url('kosmoskosmos/newsletter2go/mycontroller  '),
                'icon'        => 'icon-envelope-square',
                'permissions' => ['kosmoskosmos.newsletter2go.*'],
                'order'       => 500,
            ],
        ];
    }
}
