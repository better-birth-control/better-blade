<?php

namespace BetterBirthControl\Better;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BetterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'better-blade');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'better');
        Blade::componentNamespace('BetterBirthControl\\Better\\View\\Components', 'better');

        $this->publishes([
          __DIR__.'/../resources/assets' => public_path('vendor/better'),
          __DIR__.'/../resources/favicon' => public_path(),
        ], 'better-assets');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            /*$this->publishes([
                __DIR__.'/../config/config.php' => config_path('better-blade.php'),
            ], 'config');*/

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/better-blade'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/better-blade'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/better-blade'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        /*$this->mergeConfigFrom(__DIR__.'/../config/config.php', 'better-blade');

        // Register the main class to use with the facade
        $this->app->singleton('better-blade', function () {
            return new Better;
        });*/
    }
}
