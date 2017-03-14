<?php

namespace App\Support;

use App\Support\Database\Seeder\SeederServiceProvider;
use App\Support\Html\HtmlServiceProvider;
use App\Support\Panels\Providers\ViewComposerServiceProvider;
use App\Support\Providers\AbstractServiceProvider;
use App\Support\Providers\LocalizationServiceProvider;
use App\Support\Providers\RequestServiceProvider;
use App\Support\Providers\TestingServiceProvider;

class SupportServiceProvider extends AbstractServiceProvider
{
    protected $unitAlias = 'support';

    protected $providers = [
        ViewComposerServiceProvider::class,
        SeederServiceProvider::class,
        RequestServiceProvider::class,
        LocalizationServiceProvider::class,
        HtmlServiceProvider::class,
        TestingServiceProvider::class,
    ];
}