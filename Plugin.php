<?php namespace Zorca\ContactMe;

use Backend;
use System\Classes\PluginBase;

/**
 * ContactMe Plugin Information File
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
            'name'        => 'ContactMe',
            'description' => 'Contact Form plugin for OctoberCMS',
            'author'      => 'Zorca',
            'icon'        => 'icon-envelope'
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
            'Zorca\ContactMe\Components\ContactForm' => 'contactForm',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'zorca.contactme.settings' => [
                'tab' => 'ContactMe',
                'label' => 'Contact Form Settings'
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
            'contactme' => [
                'label'       => 'ContactMe',
                'url'         => Backend::url('zorca/contactme/mycontroller'),
                'icon'        => 'icon-envelope',
                'permissions' => ['zorca.contactme.*'],
                'order'       => 500,
            ],
        ];
    }

    public function registerSettings(){
      return [
          'settings' => [
              'label'       => 'Contact Form',
              'description' => 'Settings for contact form',
              'category'    => 'Marketing',
              'icon'        => 'icon-envelope',
              'class'       => 'Zorca\ContactMe\Models\Settings',
              'order'       => 100,
              'permissions' => ['zorca.contactme.settings']
          ]
      ];
    }

    public function registerMailTemplates()
    {
        return [
            'zorca.contactme::emails.message' => 'Mail template for contact from website',
            'zorca.contactme::emails.auto-reply' => 'Mail template for auto reply',
        ];
    }
}
