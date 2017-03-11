<?php

namespace App\Units\Utils\Providers;

use App\Support\Providers\AbstractServiceProvider;
use App\Units\Utils\Console\Clear;

class UnitServiceProvider extends AbstractServiceProvider
{
    protected $unitAlias = 'utils';
    protected $hasViews = true;
    protected $hasTranslations = true;

    protected $providers = [
        RouteServiceProvider::class,
    ];
}