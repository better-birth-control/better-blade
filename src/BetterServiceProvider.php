<?php

namespace BetterBirthControl\Better;

use BetterBirthControl\Better\View\Components\BetterButton;
use BetterBirthControl\Better\View\Components\BetterCheckbox;
use BetterBirthControl\Better\View\Components\BetterClouds;
use BetterBirthControl\Better\View\Components\BetterCollapsible;
use BetterBirthControl\Better\View\Components\BetterDebug;
use BetterBirthControl\Better\View\Components\BetterDonationForm;
use BetterBirthControl\Better\View\Components\BetterHeading;
use BetterBirthControl\Better\View\Components\BetterIcon;
use BetterBirthControl\Better\View\Components\BetterImage;
use BetterBirthControl\Better\View\Components\BetterInput;
use BetterBirthControl\Better\View\Components\BetterLink;
use BetterBirthControl\Better\View\Components\BetterLoading;
use BetterBirthControl\Better\View\Components\BetterLogo;
use BetterBirthControl\Better\View\Components\BetterParagraph;
use BetterBirthControl\Better\View\Components\BetterProgressBar;
use BetterBirthControl\Better\View\Components\BetterSelect;
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
        Blade::component(BetterButton::class);
        Blade::component(BetterCheckbox::class);
        Blade::component(BetterCollapsible::class);
        Blade::component(BetterDebug::class);
        Blade::component(BetterDonationForm::class);
        Blade::component(BetterHeading::class);
        Blade::component(BetterIcon::class);
        Blade::component(BetterImage::class);
        Blade::component(BetterInput::class);
        Blade::component(BetterLink::class);
        Blade::component(BetterLoading::class);
        Blade::component(BetterLogo::class);
        Blade::component(BetterParagraph::class);
        Blade::component(BetterProgressBar::class);
        Blade::component(BetterSelect::class);

        $this->publishes([
          __DIR__.'/../resources/assets' => resource_path('vendor/better'),
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
