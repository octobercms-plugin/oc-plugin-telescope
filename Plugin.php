<?php namespace Jcc\Telescope;

use Backend;
use System\Classes\PluginBase;

/**
 * telescope Plugin Information File
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
            'name'        => 'telescope',
            'description' => 'No description provided yet...',
            'author'      => 'jcc',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(\Illuminate\Auth\AuthServiceProvider::class);
        $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
        $this->app->register(TelescopeServiceProvider::class);
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
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'jcc.telescope.some_permission' => [
                'tab' => 'telescope',
                'label' => 'Some permission'
            ],
        ];
    }


}
