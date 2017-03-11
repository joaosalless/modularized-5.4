<?php

namespace App\Support\Database\Seeder;

use Illuminate\Support\ServiceProvider;

class SeederServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerSeeder();
    }

    protected function registerSeeder()
    {
        $this->app->singleton('support.seeder.manager', function() {
            return new Manager();
        });
    }
}
