<?php

namespace App\Domains\Abstracts\Users\Providers;

use App\Support\Providers\AbstractServiceProvider;

class DomainServiceProvider extends AbstractServiceProvider
{
    protected $unitAlias       = 'abstracts_user';
    protected $hasMigrations   = true;
    protected $hasTranslations = true;

    protected $providers = [
        EventServiceProvider::class,
    ];
}