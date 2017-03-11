<?php

namespace App\Domains\Persons\Database\Factories;

use App\Domains\Persons\Person;
use App\Support\Database\Factory\ModelFactory;

class PersonFactory extends ModelFactory
{
    protected $model = Person::class;

    protected function fields()
    {
        return [
            'razao_social'       => $this->faker->company,
            'nome_fantasia'      => $this->faker->company,
            'cnpj'               => $this->faker->cnpj,
            'data_fundacao'      => $this->faker->date(),
            'inscricao_estadual' => 'Isento',
            'telefone'           => $this->faker->phoneNumber,
            'celular'            => $this->faker->phoneNumber,
            'cep'                => $this->faker->postcode,
            'logradouro'         => $this->faker->streetAddress,
            'numero'             => $this->faker->numberBetween(100, 2000),
            'complemento'        => null,
            'observacao'         => null,
            'bairro'             => null,
            'municipio'          => null,
            'uf'                 => null,
            'ibge'               => null,
            'site'               => null,
            'social'             => null,
        ];
    }
}