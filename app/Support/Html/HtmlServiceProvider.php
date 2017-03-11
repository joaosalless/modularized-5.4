<?php

namespace App\Support\Html;

use App\Support\Html\Bootstrap\Providers\BootstrapServiceProvider;
use App\Support\Providers\AbstractServiceProvider;

class HtmlServiceProvider extends AbstractServiceProvider
{
    protected $unitAlias = 'bs';

    protected $providers = [
        BootstrapServiceProvider::class,
    ];
}