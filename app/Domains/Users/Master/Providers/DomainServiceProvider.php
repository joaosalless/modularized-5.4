<?php

namespace App\Domains\Users\Master\Providers;

use App\Domains\Users\Master\Database\Factories\CompanyFactory;
use App\Domains\Users\Master\Database\Factories\PersonFactory;
use App\Domains\Users\Master\Database\Factories\UserFactory;
use App\Domains\Users\Master\Database\Seeders\UserSeeder;
use App\Domains\Users\Master\Repositories;
use App\Support\Providers\AbstractServiceProvider;

class DomainServiceProvider extends AbstractServiceProvider
{
    protected $unitAlias       = 'master_users';
    protected $hasMigrations   = true;
    protected $hasTranslations = true;
    protected $hasViews        = true;

    protected $bindings = [
        Repositories\UserRepository::class => Repositories\UserRepositoryEloquent::class,
    ];

    protected $providers = [
        EventServiceProvider::class,
    ];

    protected $factories = [
        UserFactory::class,
    ];

    protected $seeders = [
        UserSeeder::class,
    ];
}