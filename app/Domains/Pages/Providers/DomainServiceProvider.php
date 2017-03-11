<?php

namespace App\Domains\Pages\Providers;

use App\Domains\Pages\Database\Factories;
use App\Domains\Pages\Database\Seeders;
use App\Domains\Pages\Repositories;
use App\Support\Providers\AbstractServiceProvider;

class DomainServiceProvider extends AbstractServiceProvider
{
    protected $unitAlias       = 'pages';
    protected $hasMigrations   = true;
    protected $hasTranslations = true;

    protected $providers = [
        EventServiceProvider::class,
    ];

    protected $bindings = [
        Repositories\PageRepository::class     => Repositories\PageRepositoryEloquent::class,
        Repositories\CategoryRepository::class => Repositories\CategoryRepositoryEloquent::class,
    ];

    protected $factories = [
        Factories\CategoryFactory::class,
        Factories\PageFactory::class,
    ];

    protected $seeders = [
        Seeders\CategorySeeder::class,
        Seeders\PageSeeder::class,
    ];
}