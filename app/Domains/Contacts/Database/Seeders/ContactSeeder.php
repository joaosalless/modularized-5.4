<?php

namespace App\Domains\Contacts\Database\Seeders;

use App\Domains\Contacts\Contact;
use App\Domains\Contacts\Message;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run()
    {
        $contacts = [
            [
                'name'                => config('app.name'),
                'email'               => 'contato@localhost.dev',
                'intro'               => null,
                'body'                => null,
                'bairro'              => null,
                'municipio'           => null,
                'uf'                  => null,
                'ibge'                => null,
                'cep'                 => null,
                'accept_html'         => true,
                'auto_reply'          => false,
                'reply_message_site'  => 'Mensagem enviada com sucesso!',
                'reply_message_email' => 'Obrigado pelo contato. Retornaremos sua mensagem assim que possível.',
            ],
        ];

        foreach ($contacts as $contact) {
            factory(Contact::class, 1)->create($contact)->each(function ($c) {
                $c->messages()->save(factory(Message::class)->make([
                    'contact_name'  => $c->name,
                    'contact_email' => $c->email,
                    'contact_phone' => $c->phone,
                ]));
            });
        }
    }
}