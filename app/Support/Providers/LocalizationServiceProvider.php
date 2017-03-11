<?php

namespace App\Support\Providers;

use Carbon\Carbon;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Support\ServiceProvider;

class LocalizationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        setlocale(LC_ALL, app()->getLocale().'.UTF-8');
        Carbon::setLocale(app()->getLocale());
    }

    public function register()
    {
        $this->app->singleton(Generator::class, function () {
            return Factory::create('pt_BR');
        });
    }
}
