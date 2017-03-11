<?php

namespace App\Domains\Contacts\Rules;

use App\Domains\Contacts\Message;
use App\Support\Rules\Rules;

class MessageRules extends Rules
{
    protected $entity = Message::class;

    public function defaultRules()
    {
        return [
            'contact_name'  => 'required',
            'contact_email' => 'required',
            'contact_phone' => 'required',
            'sender_name'   => 'required',
            'sender_email'  => 'required',
            'sender_phone'  => 'required',
            'subject'       => 'required',
            'message'       => 'required',
        ];
    }

    public function creating($callback = null)
    {
        return $this->returnRules([

        ], $callback);
    }

    public function updating($callback = null)
    {
        return $this->returnRules([

        ], $callback);
    }
}