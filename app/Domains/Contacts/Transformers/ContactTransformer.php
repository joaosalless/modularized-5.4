<?php

namespace App\Domains\Contacts\Transformers;

use App\Domains\Contacts\Contact;
use League\Fractal\TransformerAbstract;

class ContactTransformer extends TransformerAbstract
{
    protected $availableIncludes = [

    ];

    protected $defaultIncludes = [

    ];

    public function transform(Contact $model)
    {
        return [
            'id'                  => (int)$model->id,
            'name'                => $model->name,
            'email'               => $model->email,
            'phone'               => $model->phone,
            'street'              => $model->street,
            'city'                => $model->city,
            'state'               => $model->state,
            'country'             => $model->country,
            'zipcode'             => $model->zipcode,
            'accept_html'         => $model->accept_html,
            'auto_reply'          => $model->auto_reply,
            'save_messages'       => $model->save_messages,
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