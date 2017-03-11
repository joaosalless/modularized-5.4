<?php

namespace App\Units\Panel\Master\Providers;

use App\Support\Providers\AbstractServiceProvider as ServiceProvider;
use App\Support\Panels\PanelPropertiesTrait;

class UnitServiceProvider extends ServiceProvider
{
    use PanelPropertiesTrait;

    protected $unitAlias       = 'master';
    protected $routeAlias      = 'master';
    protected $routePrefix     = 'master';
    protected $authProvider    = 'master';
    protected $hasViews        = true;
    protected $hasTranslations = true;

    protected $providers = [
        RouteServiceProvider::class,
        EventServiceProvider::class,
        MenuServiceProvider::class,
        ViewComposerServiceProvider::class,
    ];

    protected $commands = [

    ];
}