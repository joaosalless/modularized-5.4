<?php

namespace App\Units\Auth\Routes;

use App\Support\Http\Routing\RouteFile;

class Api extends RouteFile
{
    protected function routes()
    {
        $this->defaultRoutes();
    }

    protected function defaultRoutes()
    {
        $this->router->group([
            'middleware' => [],
        ], function () {

        });
    }
}