<?php

namespace App\Domains\Contacts\Providers;

use App\Domains\Contacts\Repositories;
use App\Domains\Contacts\Database\Seeders;
use App\Domains\Contacts\Database\Factories;
use App\Support\Providers\AbstractServiceProvider;

class DomainServiceProvider extends AbstractServiceProvider
{
    protected $unitAlias = 'contacts';

    protected $hasMigrations = true;

    protected $hasTranslations = true;

    protected $providers = [
        EventServiceProvider::class,
    ];

    protected $bindings = [
        Repositories\ContactRepository::class => Repositories\ContactRepositoryEloquent::class,
        Repositories\MessageRepository::class => Repositories\MessageRepositoryEloquent::class,
    ];

    protected $factories = [
        Factories\ContactFactory::class,
        Factories\MessageFactory::class,
    ];

    protected $seeders = [
        Seeders\ContactSeeder::class,
    ];

}