<?php

namespace App\Support\ViaCep;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class ZipCode
{
    protected $http;
    protected $address;

    public function __construct(ClientInterface $http = null)
    {
        $this->http = $http ?: new Client;
        $this->address = new Address;
    }

    public function find($zipCode)
    {
        $response = $this->http->request('POST', '//viacep.com.br/ws/'.$zipCode.'/json');
        $attributes = json_decode($response->getBody(), true);

        if (array_key_exists('erro', $attributes) && $attributes['erro'] === true) {
            return $this->address;
        }

        return $this->address->fill($attributes);
    }
}
