<?php

namespace App\Units\Dev\Routes;

use App\Support\Http\Routing\RouteFile;

/**
 * Web Routes.
 * This file is where you may define all of the routes that are handled
 * by your application. Just tell Laravel the URIs it should respond
 * to using a Closure or controller method. Build something great!
 */
class Web extends RouteFile
{
    public function routes()
    {
        $this->defaultRoutes();
    }

    protected function defaultRoutes()
    {
        $this->router->group([
            'as'        => 'dashboard.',
            'namespace' => 'Dashboard',
        ], function () {
            $controller = 'DashboardController';
            $this->router->get('/', ['as' => 'index', 'uses' => "{$controller}@index"]);
        });
        /*
        |--------------------------------------------------------------------------
        | Profile
        |--------------------------------------------------------------------------
        */
        $this->router->group([
            'as'        => 'profile.',
            'prefix'    => 'profile',
            'namespace' => 'Profile',
        ], function () {
            $controller = 'UserProfileController';
            $this->router->get('/',                 ['as' => 'show',            'uses' => "{$controller}@showProfile"]);
            $this->router->get('/edit',             ['as' => 'edit',            'uses' => "{$controller}@editProfile"]);
            $this->router->post('/update',          ['as' => 'update',          'uses' => "{$controller}@updateProfile"]);
            $this->router->post('/update_password', ['as' => 'update_password', 'uses' => "{$controller}@updatePassword"]);
        });
        /*
        |--------------------------------------------------------------------------
        | Entity
        |--------------------------------------------------------------------------
        */
        $this->router->group([
            'as'        => 'entities.',
            'prefix'    => 'entities',
            'namespace' => 'Domains',
        ], function () {

            $controller = 'EntityController';

            $this->router->get('/', ['as' => 'index', 'uses' => "{$controller}@index"]);

            $this->router->get('/{entityDomainAlias}/{entityTranslationKey}', [
                'as'   => 'show',
                'uses' => "{$controller}@showEntity"
            ]);

            $this->router->get('/{entityDomainAlias}/{entityTranslationKey}/write', [
                'as'   => 'write',
                'uses' => "{$controller}@writeEntity"
            ]);
        });
    }
}