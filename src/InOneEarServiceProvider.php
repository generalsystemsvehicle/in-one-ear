<?php

namespace GeneralSystemsVehicle\InOneEar;

use Illuminate\Support\ServiceProvider;

class InOneEarServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes(
                [
                    __DIR__ . '/../config/config.php' => config_path(
                        'in-one-ear.php'
                    )
                ],
                'config'
            );
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'in-one-ear');

        // Register the main class to use with the facade
        $this->app->singleton('in-one-ear-languages', function () {
            return new InOneEar();
        });
    }
}
