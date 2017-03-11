<?php

namespace App\Domains\Contacts\Repositories;

use App\Domains\Contacts\Contact;
use App\Domains\Contacts\Presenters\ContactFractalPresenter;
use App\Support\Repositories\RepositoryEloquent;

class ContactRepositoryEloquent extends RepositoryEloquent implements ContactRepository
{
    protected $fieldSearchable = [
        'name'                => 'like',
        'email'               => 'like',
        'phone'               => 'like',
        'cep'                 => 'like',
        'logradouro'          => 'like',
        'numero'              => 'like',
        'complemento'         => 'like',
        'observacao'          => 'like',
        'bairro'              => 'like',
        'municipio'          => 'like',
        'uf'                  => 'like',
        'ibge'                => 'like',
        'reply_message_site'  => 'like',
        'reply_message_email' => 'like',
        'intro'               => 'like',
        'body'                => 'like',
        'layout'              => 'like',
        'deleted_at'          => 'like',
        'created_at'          => 'like',
        'updated_at'          => 'like',
    ];

    public function model()
    {
        return Contact::class;
    }

    public function presenter()
    {
        return ContactFractalPresenter::class;
    }
}