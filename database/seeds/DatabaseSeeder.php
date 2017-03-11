<?php

use Illuminate\Database\Seeder;

use App\Support\Database\Seeder\DatabaseSeeder as SupportDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SupportDatabaseSeeder::class);
    }
}
