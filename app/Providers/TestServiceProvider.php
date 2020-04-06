<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Facades\Test;
use App\Facades\TestClass;

class TestServiceProvider extends ServiceProvider
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
        //
        $this->app->singleton('test',Test::class);

        $this->app->singleton('TestClass',TestClass::class);

    }
}
