<?php

namespace App\Domains\Users\Master\Repositories;

use App\Domains\Users\Master\Presenters\UserFractalPresenter;
use App\Domains\Users\Master\User;
use App\Support\Repositories\RepositoryEloquent;

class UserRepositoryEloquent extends RepositoryEloquent implements UserRepository
{
    protected $fieldSearchable = [
        'name'           => 'like',
        'phone'          => 'like',
        'uf'             => 'like',
        'ibge'           => 'like',
        'email'          => 'like',
        'password'       => 'like',
        'remember_token' => 'like',
        'locale'         => 'like',
        'last_activity'  => 'like',
        'role'           => 'like',
        'status'         => 'like',
        'deleted_at'     => 'like',
        'created_at'     => 'like',
        'updated_at'     => 'like',
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
