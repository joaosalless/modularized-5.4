<?php

namespace App\Domains\Companies\Rules;

use App\Domains\Companies\Company;
use App\Support\Rules\Rules;

class CompanyRules extends Rules
{
    protected $entity = Company::class;

    public function defaultRules()
    {
        return [

        ];
    }

    public function creating($callback = null)
    {
        return $this->returnRules([
            'razao_social'       => 'required',
            'nome_fantasia'      => 'required',
            'cnpj'               => 'required',
            'data_fundacao'      => 'required',
            'inscricao_estadual' => 'required',
            'telefone'           => 'required',
            'celular'            => 'required',
            'cep'                => 'required',
            'logradouro'         => 'required',
            'numero'             => 'required',
            'bairro'             => 'required',
            'municipio'          => 'required',
            'uf'                 => 'required',
        ], $callback);
    }

    public function updating($callback = null)
    {
        return $this->returnRules([
            'razao_social'       => 'required',
            'nome_fantasia'      => 'required',
            'cnpj'               => 'required',
            'data_fundacao'      => 'required',
            'inscricao_estadual' => 'required',
            'telefone'           => 'required',
            'celular'            => 'required',
            'cep'                => 'required',
            'logradouro'         => 'required',
            'numero'             => 'required',
            'bairro'             => 'required',
            'municipio'          => 'required',
            'uf'                 => 'required',
        ], $callback);
    }
}