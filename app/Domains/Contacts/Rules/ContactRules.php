<?php

namespace App\Domains\Contacts\Rules;

use App\Domains\Contacts\Contact;
use App\Support\Rules\Rules;

class ContactRules extends Rules
{
    protected $entity = Contact::class;

    public function defaultRules()
    {
        return [
            'name'                => 'required',
            'email'               => 'required',
            'phone'               => 'required',
            'reply_message_site'  => 'required',
            'reply_message_email' => 'required',
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