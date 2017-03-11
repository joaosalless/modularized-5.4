<?php

namespace App\Domains\Contacts\Database\Factories;

use App\Domains\Contacts\Contact;
use App\Support\Database\Factory\ModelFactory;

class ContactFactory extends ModelFactory
{
    protected $model = Contact::class;

    protected function fields()
    {
        return [
            'name'                => $this->faker->name,
            'email'               => $this->faker->safeEmail,
            'phone'               => $this->faker->phoneNumber(false),
            'cep'                 => $this->faker->postcode,
            'logradouro'          => $this->faker->streetName,
            'numero'              => $this->faker->numberBetween(1, 100),
            'complemento'         => null,
            'observacao'          => null,
            'bairro'              => null,
            'municipio'           => $this->faker->city,
            'uf'                  => null,
            'ibge'                => null,
            'accept_html'         => true,
            'auto_reply'          => false,
            'save_messages'       => true,
            'require_captcha'     => false,
            'reply_message_site'  => null,
            'reply_message_email' => null,
            'intro'               => null,
            'body'                => null,
            'layout'              => null,
            'active'              => true,
        ];
    }
}