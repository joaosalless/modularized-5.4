<?php

namespace App\Units\Panel\Customer\Routes;

use App\Support\Http\Routing\RouteFile;

class Web extends RouteFile
{
    protected function routes()
    {
        $this->router->group([

        ], function () {
            /*
            |--------------------------------------------------------------------------
            | Web
            |--------------------------------------------------------------------------
            */
            $this->router->group([
                'as'        => 'dashboard.',
                'namespace' => 'Dashboard',
            ], function () {
                $this->router->get('/', ['as' => 'index', 'uses' => 'DashboardController@index']);
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
        });
    }
}