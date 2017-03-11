<?php

namespace App\Domains\Persons\Repositories;

use App\Domains\Persons\Person;
use App\Support\Repositories\RepositoryEloquent;
use App\Domains\Persons\Presenters\PersonFractalPresenter;

class PersonRepositoryEloquent extends RepositoryEloquent implements PersonRepository
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
        return Person::class;
    }

    public function presenter()
    {
        return PersonFractalPresenter::class;
    }
}
