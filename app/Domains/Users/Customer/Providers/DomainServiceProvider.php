<?php

namespace App\Domains\Users\Customer\Providers;

use App\Domains\Users\Customer\Database\Factories\UserFactory;
use App\Domains\Users\Customer\Database\Seeders\UserSeeder;
use App\Domains\Users\Customer\Repositories;
use App\Support\Providers\AbstractServiceProvider;

class DomainServiceProvider extends AbstractServiceProvider
{
    protected $unitAlias       = 'customer_users';
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