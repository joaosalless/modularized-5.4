<?php

namespace App\Units\Auth\Providers;

use App\Support\Providers\AbstractServiceProvider as ServiceProvider;

class UnitServiceProvider extends ServiceProvider
{
    protected $unitAlias       = 'auth';
    protected $hasViews        = true;
    protected $hasTranslations = true;

    protected $providers = [
        RouteServiceProvider::class,
    ];

    protected $commands = [

    ];
}