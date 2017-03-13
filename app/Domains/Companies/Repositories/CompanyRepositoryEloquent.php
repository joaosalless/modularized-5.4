<?php

namespace App\Domains\Companies\Repositories;

use App\Domains\Companies\Company;
use App\Support\Repositories\RepositoryEloquent;
use App\Domains\Companies\Presenters\CompanyFractalPresenter;

/**
 * Class CompanyRepositoryEloquent
 * @package  App\Domains\Companies
 */
class CompanyRepositoryEloquent extends RepositoryEloquent implements CompanyRepository
{
    protected $fieldSearchable = [
        'razao_social'       => 'like',
        'nome_fantasia'      => 'like',
        'cnpj'               => 'like',
        'user_type'          => 'like',
        'data_fundacao'      => 'like',
        'inscricao_estadual' => 'like',
        'telefone'           => 'like',
        'celular'            => 'like',
        'cep'                => 'like',
        'logradouro'         => 'like',
        'numero'             => 'like',
        'complemento'        => 'like',
        'bairro'             => 'like',
        'municipio'          => 'like',
        'uf'                 => 'like',
        'ibge'               => 'like',
        'site'               => 'like',
        'social'             => 'like',
        'deleted_at'         => 'like',
        'created_at'         => 'like',
        'updated_at'         => 'like',
    ];

    /**
     * Specify Model class name
     *
     * @return  string
     */
    public function model()
    {
        return Company::class;
    }

    /**
     * Specify Fractal Presenter class name
     *
     * @return  string
     */
    public function presenter()
    {
        return CompanyFractalPresenter::class;
    }
}