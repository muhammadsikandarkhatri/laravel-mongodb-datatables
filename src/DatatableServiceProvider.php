<?php

namespace Khatri\MDatatable;

use Illuminate\Support\ServiceProvider;

class DatatableServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/khatri-datatable.php' => config_path('khatri-datatable.php'),
        ], 'khatri-datatable-config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('khatri_datatable', function($app) {
            return new KhatriDatatable();
        });

        $this->mergeConfigFrom(
            __DIR__.'/../config/khatri-datatable.php',
            'khatri-datatable'
        );
    }
}
