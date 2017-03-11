<?php

namespace App\Domains\Users\Customer\Repositories;

use App\Domains\Users\Customer\Presenters\UserFractalPresenter;
use App\Domains\Users\Customer\User;
use App\Support\Repositories\RepositoryEloquent;

class UserRepositoryEloquent extends RepositoryEloquent implements UserRepository
{
    protected $fieldSearchable = [
        'email' => 'like',
    ];

    public function model()
    {
        return User::class;
    }

    public function presenter()
    {
        return UserFractalPresenter::class;
    }
}
