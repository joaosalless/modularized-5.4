<?php

namespace App\Domains\Contacts\Transformers;

use App\Domains\Contacts\Message;
use League\Fractal\TransformerAbstract;

/**
 * Class MessageTransformer
 * @package  App\Domains\Contacts
 */
class MessageTransformer extends TransformerAbstract
{
    protected $availableIncludes = [

    ];

    protected $defaultIncludes = [

    ];

    /**
     * Transform the App\Domains\Contacts\Message entity
     * @param  Message $model
     *
     * @return  array
     */
    public function transform(Message $model)
    {
        return [
            'id'            => $model->id,
            'contact_id'    => $model->contact_id,
            'contact_name'  => $model->contact_name,
            'contact_email' => $model->contact_email,
            'contact_phone' => $model->contact_phone,
            'sender_name'   => $model->sender_name,
            'sender_email'  => $model->sender_email,
            'sender_phone'  => $model->sender_phone,
            'subject'       => $model->subject,
            'message'       => $model->message,
            'received_at'   => $model->received_at,
            'important'     => $model->important,
            'junk'          => $model->junk,
            'read'          => $model->read,
            'deleted_at'    => $model->deleted_at,
            'created_at'    => $model->created_at,
            'updated_at'    => $model->updated_at,
        ];
    }
}