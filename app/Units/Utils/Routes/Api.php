<?php

namespace App\Units\Utils\Routes;

use App\Support\Http\Routing\RouteFile;

class Api extends RouteFile
{
    public function routes()
    {
        /*
        |------------------------------------------------------------------------------
        | Cnpj Api
        |------------------------------------------------------------------------------
        */
        $this->router->group([
            'prefix'    => 'cnpj',
            'as'        => 'cnpj.',
        ], function () {
            $this->router->get('validate/{cnpj}', ['as' => 'validate', 'uses' => 'CnpjController@validateCnpj']);
        });
        /*
        |------------------------------------------------------------------------------
        | Cpf Api
        |------------------------------------------------------------------------------
        */
        $this->router->group([
            'prefix'    => 'cpf',
            'as'        => 'cpf.',
        ], function () {
            $this->router->get('validate/{cpf}', ['as' => 'validate', 'uses' => 'CpfController@validateCpf']);
        });
    }
}