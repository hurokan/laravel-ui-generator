<?php

namespace LaravelUiGeneratorVendor\LaravelUiGenerator;

use Illuminate\Support\ServiceProvider;

class LaravelUiGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-ui-generator-vendor');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-ui-generator-vendor');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-ui-generator.php', 'laravel-ui-generator');

        // Register the service the package provides.
        $this->app->singleton('laravel-ui-generator', function ($app) {
            return new LaravelUiGenerator;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravel-ui-generator'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laravel-ui-generator.php' => config_path('laravel-ui-generator.php'),
        ], 'laravel-ui-generator.config');

        // Publishing the views.
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/laravel-ui-generator-vendor'),
        ], 'laravel-ui-generator.views');

        // Publishing assets.
        $this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/laravel-ui-generator-vendor'),
        ], 'laravel-ui-generator.views');

//        // Publishing the translation files.
//        $this->publishes([
//            __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-ui-generator-vendor'),
//        ], 'laravel-ui-generator.views');

        // Registering package commands.
         $this->commands([]);
    }
}
