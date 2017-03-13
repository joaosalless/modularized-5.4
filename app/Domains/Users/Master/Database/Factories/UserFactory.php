<?php

namespace App\Domains\Users\Master\Database\Factories;

use App\Domains\Users\Master\User;
use App\Support\Database\Factory\ModelFactory;
use Carbon\Carbon;

class UserFactory extends ModelFactory
{
    protected $model = User::class;

    protected function fields()
    {
        static $password;

        return [
            'username'            => null,
            'email'               => $this->faker->unique()->safeEmail,
            'password'            => $password ?: $password = bcrypt('123456'),
            'remember_token'      => str_random(10),
            'password_updated_at' => Carbon::now(),
            'role'                => null,
            'terms'               => true,
        ];
    }
}