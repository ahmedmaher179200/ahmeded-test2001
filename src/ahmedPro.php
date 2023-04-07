<?php

namespace ahmeded\test2001;

use Illuminate\Support\ServiceProvider;

class ahmedPro extends ServiceProvider
{
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
        $this->publishes([__DIR__ . '/tools' => base_path('config')]);
    }
}
