<?php

namespace GustavoSantarosa\PerPageTrait\Provider;

use Illuminate\Support\ServiceProvider;

class PerPageTraitProvider extends ServiceProvider
{
    public $bindings = [
        ServerProvider::class => PerPageTrait::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
