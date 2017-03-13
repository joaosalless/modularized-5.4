<?php

namespace App\Domains\Persons\Repositories;

use App\Domains\Persons\Person;
use App\Support\Repositories\RepositoryEloquent;
use App\Domains\Persons\Presenters\PersonFractalPresenter;

/**
 * Class PersonRepositoryEloquent
 * @package  App\Domains\Persons
 */
class PersonRepositoryEloquent extends RepositoryEloquent implements PersonRepository
{
    protected $fieldSearchable = [
        'nome'            => 'like',
        'cpf'             => 'like',
        'user_type'       => 'like',
        'data_nascimento' => 'like',
        'telefone'        => 'like',
        'celular'         => 'like',
        'cep'             => 'like',
        'logradouro'      => 'like',
        'numero'          => 'like',
        'complemento'     => 'like',
        'bairro'          => 'like',
        'municipio'       => 'like',
        'uf'              => 'like',
        'ibge'            => 'like',
        'site'            => 'like',
        'social'          => 'like',
        'deleted_at'      => 'like',
        'created_at'      => 'like',
        'updated_at'      => 'like',
    ];

    /**
     * Specify Model class name
     *
     * @return  string
     */
    public function model()
    {
        return Person::class;
    }

    /**
     * Specify Fractal Presenter class name
     *
     * @return  string
     */
    public function presenter()
    {
        return PersonFractalPresenter::class;
    }
}