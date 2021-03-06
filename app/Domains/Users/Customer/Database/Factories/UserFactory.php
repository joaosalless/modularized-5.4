<?php

namespace App\Domains\Users\Customer\Database\Factories;

use App\Domains\Users\Customer\User;
use App\Support\Database\Factory\ModelFactory;
use Carbon\Carbon;
use Illuminate\Support\Str;

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
            'profile_id'          => null,
            'profile_type'        => null,
            'role'                => null,
            'email_verified'      => false,
            'email_verified_at'   => null,
            'banned'              => false,
            'banned_at'           => null,
            'last_login'          => null,
            'last_activity'       => null,
            'active'              => true,
        ];
    }
}