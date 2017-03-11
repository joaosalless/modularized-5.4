<?php

namespace App\Domains\Persons\Rules;

use App\Domains\Persons\Person;
use App\Support\Rules\Rules;

class PersonRules extends Rules
{
    protected $entity = Person::class;

    public function defaultRules()
    {
        return [

        ];
    }

    public function creating($callback = null)
    {
        return $this->returnRules([
            'nome'            => 'required',
            'apelido'         => 'required',
            'cpf'             => 'required',
            'sexo'            => 'required',
            'data_nascimento' => 'required',
            'telefone'        => 'required',
            'celular'         => 'required',
            'cep'             => 'required',
            'logradouro'      => 'required',
            'numero'          => 'required',
            'bairro'          => 'required',
            'municipio'       => 'required',
            'uf'              => 'required',
        ], $callback);
    }

    public function updating($callback = null)
    {
        return $this->returnRules([
            'nome'            => 'required',
            'apelido'         => 'required',
            'cpf'             => 'required',
            'sexo'            => 'required',
            'data_nascimento' => 'required',
            'telefone'        => 'required',
            'celular'         => 'required',
            'cep'             => 'required',
            'logradouro'      => 'required',
            'numero'          => 'required',
            'bairro'          => 'required',
            'municipio'       => 'required',
            'uf'              => 'required',
        ], $callback);
    }

}