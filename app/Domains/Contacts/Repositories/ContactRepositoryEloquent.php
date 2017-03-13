<?php

namespace App\Domains\Contacts\Repositories;

use App\Domains\Contacts\Contact;
use App\Support\Repositories\RepositoryEloquent;
use App\Domains\Contacts\Presenters\ContactFractalPresenter;

/**
 * Class ContactRepositoryEloquent
 * @package  App\Domains\Contacts
 */
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
        'municipio'           => 'like',
        'uf'                  => 'like',
        'ibge'                => 'like',
        'accept_html'         => 'like',
        'auto_reply'          => 'like',
        'save_messages'       => 'like',
        'require_captcha'     => 'like',
        'reply_message_site'  => 'like',
        'reply_message_email' => 'like',
        'intro'               => 'like',
        'body'                => 'like',
        'layout'              => 'like',
        'active'              => 'like',
        'deleted_at'          => 'like',
        'created_at'          => 'like',
        'updated_at'          => 'like',
    ];

    /**
     * Specify Model class name
     *
     * @return  string
     */
    public function model()
    {
        return Contact::class;
    }

    /**
     * Specify Fractal Presenter class name
     *
     * @return  string
     */
    public function presenter()
    {
        return ContactFractalPresenter::class;
    }
}