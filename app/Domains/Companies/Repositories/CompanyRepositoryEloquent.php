<?php

namespace App\Domains\Companies\Repositories;

use App\Domains\Companies\Company;
use App\Support\Repositories\RepositoryEloquent;
use App\Domains\Companies\Presenters\CompanyFractalPresenter;

class CompanyRepositoryEloquent extends RepositoryEloquent implements CompanyRepository
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
        return Company::class;
    }

    public function presenter()
    {
        return CompanyFractalPresenter::class;
    }
}
