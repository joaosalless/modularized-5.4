<?php

namespace App\Units\Auth\Routes;

use App\Support\Http\Routing\RouteFile;

class Web extends RouteFile
{
    protected function routes()
    {
        /*
        |------------------------------------------------------------------------------
        | Auth Routes
        |------------------------------------------------------------------------------
        */
        $this->router->group([

        ], function () {
            $this->router->get( '{panel}',                        ['as' => 'login_form',           'uses' => 'LoginController@showLoginForm']);
            $this->router->post('{panel}/login',                  ['as' => 'login',                'uses' => 'LoginController@login']);
            $this->router->post('{panel}/logout',                 ['as' => 'logout',               'uses' => 'LoginController@logout']);
            $this->router->post('{panel}/password/email',         ['as' => 'password.reset.email', 'uses' => 'ForgotPasswordController@sendResetLinkEmail']);
            $this->router->get( '{panel}/password/reset',         ['as' => 'password.reset.form',  'uses' => 'ForgotPasswordController@showLinkRequestForm']);
            $this->router->post('{panel}/password/reset',         ['as' => 'password.reset',       'uses' => 'ResetPasswordController@reset']);
            $this->router->get( '{panel}/password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'ResetPasswordController@showResetForm']);
            $this->router->get( '{panel}/register',               ['as' => 'register_form',        'uses' => 'RegisterController@showRegistrationForm']);
            $this->router->post('{panel}/register',               ['as' => 'register',             'uses' => 'RegisterController@register']);
        });
    }
}