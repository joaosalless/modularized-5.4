<?php

namespace App\Support\Html\Bootstrap\Providers;

use App\Support\Providers\AbstractServiceProvider;

class BootstrapServiceProvider extends AbstractServiceProvider
{
    protected $unitAlias = 'bs';
    protected $hasViews  = true;

    protected $providers = [
        FormServiceProvider::class,
        HtmlServiceProvider::class,
    ];
}
