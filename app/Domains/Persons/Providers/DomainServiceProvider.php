<?php

namespace App\Domains\Persons\Providers;

use App\Domains\Persons\Database\Factories\PersonFactory;
use App\Domains\Persons\Database\Seeders\PersonSeeder;
use App\Domains\Persons\Repositories;
use App\Support\Providers\AbstractServiceProvider;

class DomainServiceProvider extends AbstractServiceProvider
{
    protected $unitAlias       = 'persons';
    protected $hasMigrations   = true;
    protected $hasTranslations = true;
    protected $hasViews        = true;

    protected $bindings = [
        Repositories\PersonRepository::class => Repositories\PersonRepositoryEloquent::class,
    ];

    protected $providers = [
        EventServiceProvider::class,
    ];

    protected $factories = [
        PersonFactory::class,
    ];

    protected $seeders = [
        PersonSeeder::class,
    ];
}