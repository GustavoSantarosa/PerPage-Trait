<?php

namespace QuantumCode\PerPageTrait\Provider;

use Illuminate\Support\ServiceProvider;

class PerPageTraitProvider extends ServiceProvider
{
    public $bindings = [];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/perpage.php',
            'perpage'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/perpage.php' => config_path('perpage.php'),
        ], 'config');
    }
}
