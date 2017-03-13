<?php

namespace App\Domains\Users\Master\Services;

use App\Domains\Abstracts\Users\Services\AbstractUserService;
use App\Domains\Users\Master\Repositories\UserRepository;

class UserService extends AbstractUserService
{
    protected function getUserRepository(): string
    {
        return UserRepository::class;
    }
}