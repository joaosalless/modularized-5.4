<?php

namespace App\Units\Dev\Providers;

use App\Support\Providers\AbstractServiceProvider;
use App\Units\Dev\Console\Clear;

class UnitServiceProvider extends AbstractServiceProvider
{
    protected $unitAlias = 'dev';
    protected $hasViews = true;
    protected $hasTranslations = true;

    protected $providers = [
        RouteServiceProvider::class,
        ViewComposerServiceProvider::class,
    ];

    protected $commands = [
        Clear::class,
    ];
}