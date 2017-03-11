<?php

namespace App\Domains\Companies\Providers;

use App\Domains\Companies\Database\Factories\CompanyFactory;
use App\Domains\Companies\Database\Seeders\CompanySeeder;
use App\Domains\Companies\Repositories;
use App\Support\Providers\AbstractServiceProvider;

class DomainServiceProvider extends AbstractServiceProvider
{
    protected $unitAlias       = 'companies';
    protected $hasMigrations   = true;
    protected $hasTranslations = true;
    protected $hasViews        = true;

    protected $bindings = [
        Repositories\CompanyRepository::class => Repositories\CompanyRepositoryEloquent::class,
    ];

    protected $providers = [
        EventServiceProvider::class,
    ];

    protected $factories = [
        CompanyFactory::class,
    ];

    protected $seeders = [
        CompanySeeder::class,
    ];
}