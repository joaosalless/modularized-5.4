<?php

namespace App\Units\Site\Routes;

use App\Support\Http\Routing\RouteFile;

class Web extends RouteFile
{
    public function routes()
    {
        /*
        |--------------------------------------------------------------------------
        | Pages Routes
        |--------------------------------------------------------------------------
        */
        $this->router->group([

        ], function () {
            $controller = 'PageController';
            $this->router->get('/',                    ['as' => 'index',                'uses' => "{$controller}@index"]);
            $this->router->get('quem-somos',           ['as' => 'quem_somos',           'uses' => "{$controller}@quemSomos"]);
            $this->router->get('termos',               ['as' => 'termos',               'uses' => "{$controller}@termos"]);
            $this->router->get('politica/privacidade', ['as' => 'politica.privacidade', 'uses' => "{$controller}@politicaPrivacidade"]);
        });
    }
}