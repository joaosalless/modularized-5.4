<?php

namespace App\Units\Site\Providers;

use App\Support\Providers\AbstractServiceProvider;

class UnitServiceProvider extends AbstractServiceProvider
{
    protected $unitAlias = 'site';
    protected $hasViews = true;
    protected $hasTranslations = true;

    protected $providers = [
        RouteServiceProvider::class,
    ];
}