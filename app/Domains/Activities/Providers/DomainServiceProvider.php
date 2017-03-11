<?php

namespace App\Domains\Activities\Providers;

use App\Domains\Activities\Repositories;
use App\Support\Providers\AbstractServiceProvider;

class DomainServiceProvider extends AbstractServiceProvider
{
    protected $unitAlias       = 'activities';
    protected $hasMigrations   = true;
    protected $hasTranslations = true;

    protected $providers = [
        AuthServiceProvider::class,
    ];

    protected $bindings = [
         Repositories\ActivityRepository::class => Repositories\ActivityRepositoryEloquent::class,
    ];
}