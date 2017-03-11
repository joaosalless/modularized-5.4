<?php

namespace App\Units\Panel\Customer\Providers;

use App\Support\Providers\AbstractServiceProvider as ServiceProvider;
use App\Support\Panels\PanelPropertiesTrait;

class UnitServiceProvider extends ServiceProvider
{
    use PanelPropertiesTrait;

    protected $unitAlias       = 'customer';
    protected $routeAlias      = 'customer';
    protected $routePrefix     = 'customer';
    protected $authProvider    = 'customer';
    protected $hasViews        = true;
    protected $hasTranslations = true;

    protected $providers = [
        RouteServiceProvider::class,
        EventServiceProvider::class,
        ViewComposerServiceProvider::class,
    ];

    protected $commands = [

    ];
}