<?php

namespace App\Domains\Users\Customer\Services;

use App\Domains\Abstracts\Users\Services\AbstractUserService;
use App\Domains\Users\Customer\Repositories\UserRepository;

class UserService extends AbstractUserService
{
    protected function getUserRepository(): string
    {
        return UserRepository::class;
    }
}