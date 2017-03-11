<?php

namespace App\Support\Database\Seeder;

use Illuminate\Database\Seeder as LaravelSeeder;

class DatabaseSeeder extends LaravelSeeder
{
    public function run()
    {
        $seeders = app('support.seeder.manager')->getSeeders();

        $seeders->each(function ($seeder) {
            $this->call($seeder);
        });
    }
}