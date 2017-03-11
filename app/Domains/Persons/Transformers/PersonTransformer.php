<?php

namespace App\Domains\Persons\Transformers;

use App\Domains\Persons\Person;
use League\Fractal\TransformerAbstract;

class PersonTransformer extends TransformerAbstract
{
    protected $defaultIncludes = ['user'];

    public function transform(Person $model)
    {
        return [
            'id'                 => $model->id,
            'razao_social'       => $model->razao_social,
            'nome_fantasia'      => $model->nome_fantasia,
            'cnpj'               => $model->cnpj,
            'data_fundacao'      => $model->data_fundacao,
            'inscricao_estadual' => $model->inscricao_estadual,
            'telefone'           => $model->telefone,
            'celular'            => $model->celular,
            'cep'                => $model->cep,
            'logradouro'         => $model->logradouro,
            'numero'             => $model->numero,
            'complemento'        => $model->complemento,
            'observacao'         => $model->observacao,
            'bairro'             => $model->bairro,
            'municipio'          => $model->municipio,
            'uf'                 => $model->uf,
            'ibge'               => $model->ibge,
            'site'               => $model->site,
            'social'             => $model->social,
            'deleted_at'         => $model->deleted_at,
            'created_at'         => $model->created_at,
            'updated_at'         => $model->updated_at,
        ];
    }

    public function includeUser(Person $model)
    {
        return $this->item($model->user, new UserTransformer());
    }
}
