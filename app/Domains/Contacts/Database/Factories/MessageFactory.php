<?php

namespace App\Domains\Contacts\Database\Factories;

use App\Domains\Contacts\Message;
use App\Support\Database\Factory\ModelFactory;
use Carbon\Carbon;

class MessageFactory extends ModelFactory
{
    protected $model = Message::class;

    protected function fields()
    {
        return [
            'contact_name'  => $this->faker->name,
            'contact_email' => $this->faker->email,
            'contact_phone' => $this->faker->phoneNumber,
            'sender_name'   => $this->faker->name,
            'sender_email'  => $this->faker->email,
            'sender_phone'  => $this->faker->phoneNumber,
            'subject'       => $this->faker->sentence,
            'message'       => $this->faker->sentence,
            'received_at'   => Carbon::now(),
        ];
    }
}