<?php

namespace App\Support\Database\Seeder;

class Manager
{
    protected $seeders = [];

    public function addSeeder($seederClass)
    {
        $this->seeders[] = $seederClass;
    }

    public function getSeeders()
    {
        return collect($this->seeders);
    }
}