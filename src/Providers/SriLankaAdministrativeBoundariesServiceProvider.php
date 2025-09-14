<?php

namespace Shahmy\SriLankaAdministrativeBoundaries\Providers;

use Illuminate\Support\ServiceProvider;

class SriLankaAdministrativeBoundariesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations'),
        ], 'sri-lanka-administrative-boundaries-migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}