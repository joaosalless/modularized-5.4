<?php

namespace App\Domains\Contacts\Transformers;

use App\Domains\Contacts\Contact;
use League\Fractal\TransformerAbstract;

/**
 * Class ContactTransformer
 * @package  App\Domains\Contacts
 */
class ContactTransformer extends TransformerAbstract
{
    protected $availableIncludes = [

    ];

    protected $defaultIncludes = [

    ];

    /**
     * Transform the App\Domains\Contacts\Contact entity
     * @param  Contact $model
     *
     * @return  array
     */
    public function transform(Contact $model)
    {
        return [
            'id'                  => $model->id,
            'name'                => $model->name,
            'email'               => $model->email,
            'phone'               => $model->phone,
            'cep'                 => $model->cep,
            'logradouro'          => $model->logradouro,
            'numero'              => $model->numero,
            'complemento'         => $model->complemento,
            'observacao'          => $model->observacao,
            'bairro'              => $model->bairro,
            'municipio'           => $model->municipio,
            'uf'                  => $model->uf,
            'ibge'                => $model->ibge,
            'accept_html'         => $model->accept_html,
            'auto_reply'          => $model->auto_reply,
            'save_messages'       => $model->save_messages,
            'require_captcha'     => $model->require_captcha,
            'reply_message_site'  => $model->reply_message_site,
            'reply_message_email' => $model->reply_message_email,
            'intro'               => $model->intro,
            'body'                => $model->body,
            'layout'              => $model->layout,
            'active'              => $model->active,
            'deleted_at'          => $model->deleted_at,
            'created_at'          => $model->created_at,
            'updated_at'          => $model->updated_at,
        ];
    }
}