<?php

namespace App\Domains\Medias\Providers;

use App\Domains\Medias\Database\Factories;
use App\Domains\Medias\Database\Seeders;
use App\Domains\Medias\Repositories;
use App\Support\Providers\AbstractServiceProvider;

class DomainServiceProvider extends AbstractServiceProvider
{
    protected $unitAlias =     'medias';
    protected $hasMigrations   = true;
    protected $hasTranslations = true;

    protected $providers = [
        EventServiceProvider::class,
    ];

    protected $bindings = [
        Repositories\CategoryRepository::class => Repositories\CategoryRepositoryEloquent::class,
        Repositories\MediaRepository::class    => Repositories\MediaRepositoryEloquent::class,
    ];

    protected $factories = [
        Factories\CategoryFactory::class,
    ];

    protected $seeders = [
        Seeders\CategorySeeder::class,
    ];

}