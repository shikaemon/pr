<?php

namespace Shikaemon\Pr;

use Illuminate\Support\ServiceProvider;

class PrServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }


    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'PrHelper.php';
    }
}


