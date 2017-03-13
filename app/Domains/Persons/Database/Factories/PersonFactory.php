<?php

namespace App\Domains\Persons\Database\Factories;

use App\Domains\Persons\Person;
use App\Support\Database\Factory\ModelFactory;

class PersonFactory extends ModelFactory
{
    protected $model = Person::class;

    protected function fields()
    {
        $name = $this->faker->name;

        return [
            'nome'            => $name,
            'apelido'         => str_slug($name),
            'cpf'             => $this->faker->cpf,
            'data_nascimento' => $this->faker->date(),
            'sexo'            => $this->faker->randomElement(['M', 'F']),
            'telefone'        => $this->faker->phoneNumber,
            'celular'         => $this->faker->phoneNumber,
            'cep'             => $this->faker->postcode,
            'logradouro'      => $this->faker->streetAddress,
            'numero'          => $this->faker->numberBetween(100, 2000),
            'complemento'     => null,
            'bairro'          => null,
            'municipio'       => null,
            'uf'              => null,
            'ibge'            => null,
            'site'            => null,
            'social'          => null,
        ];
    }
}