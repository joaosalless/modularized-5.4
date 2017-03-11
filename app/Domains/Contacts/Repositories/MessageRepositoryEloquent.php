<?php

namespace App\Domains\Contacts\Repositories;

use App\Domains\Contacts\Message;
use App\Domains\Contacts\Presenters\MessageFractalPresenter;
use App\Support\Repositories\RepositoryEloquent;

class MessageRepositoryEloquent extends RepositoryEloquent implements MessageRepository
{
    protected $fieldSearchable = [
        'contact_name'  => 'like',
        'contact_email' => 'like',
        'contact_phone' => 'like',
        'sender_name'   => 'like',
        'sender_email'  => 'like',
        'sender_phone'  => 'like',
        'subject'       => 'like',
        'message'       => 'like',
        'received_at'   => 'like',
        'deleted_at'    => 'like',
        'created_at'    => 'like',
        'updated_at'    => 'like',
    ];

    public function model()
    {
        return Message::class;
    }

    public function presenter()
    {
        return MessageFractalPresenter::class;
    }
}