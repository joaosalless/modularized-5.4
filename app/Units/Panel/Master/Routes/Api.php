<?php

namespace App\Units\Panel\Master\Routes;

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