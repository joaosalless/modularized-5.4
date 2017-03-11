<?php

namespace App\Domains\Users\Customer\Database\Seeders;

use App\Domains\Companies\Company;
use App\Domains\Users\Customer\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        factory(User::class, 1)->create($this->getTestUser())->each(function ($user) {
            $user->profile()->associate(factory(Company::class)->create([
                'nome_fantasia' => 'MY COMPANY'
            ]));
            $user->save();
        });

        factory(User::class, 1)->create()->each(function ($user) {
            $user->profile()->associate(factory(Company::class)->create());
            $user->save();
        });
    }

    public function getTestUser()
    {
        return [
            'username' => 'mycompany',
            'email'    => 'customer@user.com',
            'password' => bcrypt('123456'),
        ];
    }
}