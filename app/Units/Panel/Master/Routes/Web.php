<?php

namespace App\Units\Panel\Master\Routes;

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
            /*
            |--------------------------------------------------------------------------
            | Usuários Master
            |--------------------------------------------------------------------------
            */
            $this->router->group([
                'as'        => 'users_master.',
                'prefix'    => 'usuarios-master',
                'namespace' => 'Users\Master',
            ], function () {
                $controller = 'UserController';
                $this->router->get('/',                   ['as' => 'index',          'uses' => "{$controller}@index"]);
                $this->router->get('create',              ['as' => 'create',         'uses' => "{$controller}@create"]);
                $this->router->get('trashed',             ['as' => 'trashed',        'uses' => "{$controller}@getTrashed"]);
                $this->router->post('store',              ['as' => 'store',          'uses' => "{$controller}@store"]);
                $this->router->get('{id}',                ['as' => 'show',           'uses' => "{$controller}@show"]);
                $this->router->get('{id}/edit',           ['as' => 'edit',           'uses' => "{$controller}@edit"]);
                $this->router->post('{id}/update',        ['as' => 'update',         'uses' => "{$controller}@update"]);
                $this->router->get('{id}/destroy',        ['as' => 'destroy',        'uses' => "{$controller}@destroy"]);
                $this->router->get('{id}/toggle_active',  ['as' => 'toggle_active',  'uses' => "{$controller}@toggleActive"]);
                $this->router->get('{id}/toggle_trash',   ['as' => 'toggle_trash',   'uses' => "{$controller}@toggleTrash"]);
                $this->router->get('{id}/media_upload',   ['as' => 'media_upload',   'uses' => "{$controller}@mediaUpload"]);
            });
            /*
            |--------------------------------------------------------------------------
            | Usuários Customer
            |--------------------------------------------------------------------------
            */
            $this->router->group([
                'as'        => 'users_customer.',
                'prefix'    => 'customer-users',
                'namespace' => 'Users\Customer',
            ], function () {
                $controller = 'UserController';
                $this->router->get('/',                   ['as' => 'index',          'uses' => "{$controller}@index"]);
                $this->router->get('create',              ['as' => 'create',         'uses' => "{$controller}@create"]);
                $this->router->get('trashed',             ['as' => 'trashed',        'uses' => "{$controller}@getTrashed"]);
                $this->router->post('store',              ['as' => 'store',          'uses' => "{$controller}@store"]);
                $this->router->get('{id}',                ['as' => 'show',           'uses' => "{$controller}@show"]);
                $this->router->get('{id}/edit',           ['as' => 'edit',           'uses' => "{$controller}@edit"]);
                $this->router->post('{id}/update',        ['as' => 'update',         'uses' => "{$controller}@update"]);
                $this->router->get('{id}/destroy',        ['as' => 'destroy',        'uses' => "{$controller}@destroy"]);
                $this->router->get('{id}/toggle_active',  ['as' => 'toggle_active',  'uses' => "{$controller}@toggleActive"]);
                $this->router->get('{id}/toggle_trash',   ['as' => 'toggle_trash',   'uses' => "{$controller}@toggleTrash"]);
                $this->router->get('{id}/media_upload',   ['as' => 'media_upload',   'uses' => "{$controller}@mediaUpload"]);
            });
            /*
            |--------------------------------------------------------------------------
            | Atividades
            |--------------------------------------------------------------------------
            */
            $this->router->group([
                'as'        => 'activities.',
                'prefix'    => 'activities',
                'namespace' => 'Activities',
            ], function () {
                $controller = 'ActivityController';
                $this->router->get('/',                   ['as' => 'index',          'uses' => "{$controller}@index"]);
                $this->router->get('trashed',             ['as' => 'trashed',        'uses' => "{$controller}@getTrashed"]);
                $this->router->get('{id}',                ['as' => 'show',           'uses' => "{$controller}@show"]);
                $this->router->get('{id}/destroy',        ['as' => 'destroy',        'uses' => "{$controller}@destroy"]);
                $this->router->get('{id}/toggle_trash',   ['as' => 'toggle_trash',   'uses' => "{$controller}@toggleTrash"]);
            });
            /*
            |--------------------------------------------------------------------------
            | Medias
            |--------------------------------------------------------------------------
            */
            $this->router->group([
                'as'        => 'medias.',
                'prefix'    => 'medias',
                'namespace' => 'Medias',
            ], function () {
                $controller = 'MediaController';
                $this->router->get('/',                     ['as' => 'index',           'uses' => "{$controller}@index"]);
                //$this->router->get('create',                ['as' => 'create',          'uses' => "{$controller}@create"]);
                //$this->router->post('store',                ['as' => 'store',           'uses' => "{$controller}@store"]);
                $this->router->get('trashed',               ['as' => 'trashed',         'uses' => "{$controller}@getTrashed"]);
                $this->router->get('{id}',                  ['as' => 'show',            'uses' => "{$controller}@show"]);
                $this->router->get('{id}/edit',             ['as' => 'edit',            'uses' => "{$controller}@edit"]);
                $this->router->post('{id}/update',          ['as' => 'update',          'uses' => "{$controller}@update"]);
                $this->router->get('{id}/destroy',          ['as' => 'destroy',         'uses' => "{$controller}@destroy"]);
                $this->router->get('{id}/toggle_is_cover',  ['as' => 'toggle_is_cover', 'uses' => "{$controller}@toggleIsCover"]);
                $this->router->get('{id}/toggle_active',    ['as' => 'toggle_active',   'uses' => "{$controller}@toggleActive"]);
                $this->router->get('{id}/toggle_trash',     ['as' => 'toggle_trash',    'uses' => "{$controller}@toggleTrash"]);
                $this->router->get('{id}/media_upload',     ['as' => 'media_upload',    'uses' => "{$controller}@mediaUpload"]);
            });
            /*
            |--------------------------------------------------------------------------
            | Páginas
            |--------------------------------------------------------------------------
            */
            $this->router->group([
                'as'        => 'pages.',
                'prefix'    => 'pages',
                'namespace' => 'Pages',
            ], function () {
                $controller = 'PageController';
                $this->router->get('/',                   ['as' => 'index',          'uses' => "{$controller}@index"]);
                $this->router->get('create',              ['as' => 'create',         'uses' => "{$controller}@create"]);
                $this->router->get('trashed',             ['as' => 'trashed',        'uses' => "{$controller}@getTrashed"]);
                $this->router->post('store',              ['as' => 'store',          'uses' => "{$controller}@store"]);
                $this->router->get('{id}',                ['as' => 'show',           'uses' => "{$controller}@show"]);
                $this->router->get('{id}/edit',           ['as' => 'edit',           'uses' => "{$controller}@edit"]);
                $this->router->post('{id}/update',        ['as' => 'update',         'uses' => "{$controller}@update"]);
                $this->router->get('{id}/destroy',        ['as' => 'destroy',        'uses' => "{$controller}@destroy"]);
                $this->router->get('{id}/toggle_active',  ['as' => 'toggle_active',  'uses' => "{$controller}@toggleActive"]);
                $this->router->get('{id}/toggle_trash',   ['as' => 'toggle_trash',   'uses' => "{$controller}@toggleTrash"]);
                $this->router->get('{id}/media_upload',   ['as' => 'media_upload',   'uses' => "{$controller}@mediaUpload"]);
            });
            /*
            |--------------------------------------------------------------------------
            | Categorias de Páginas
            |--------------------------------------------------------------------------
            */
            $this->router->group([
                'as'        => 'pages_categories.',
                'prefix'    => 'pages-categories',
                'namespace' => 'Pages',
            ], function () {
                $controller = 'CategoryController';
                $this->router->get('/',                   ['as' => 'index',          'uses' => "{$controller}@index"]);
                $this->router->get('create',              ['as' => 'create',         'uses' => "{$controller}@create"]);
                $this->router->get('trashed',             ['as' => 'trashed',        'uses' => "{$controller}@getTrashed"]);
                $this->router->post('store',              ['as' => 'store',          'uses' => "{$controller}@store"]);
                $this->router->get('{id}',                ['as' => 'show',           'uses' => "{$controller}@show"]);
                $this->router->get('{id}/edit',           ['as' => 'edit',           'uses' => "{$controller}@edit"]);
                $this->router->post('{id}/update',        ['as' => 'update',         'uses' => "{$controller}@update"]);
                $this->router->get('{id}/destroy',        ['as' => 'destroy',        'uses' => "{$controller}@destroy"]);
                $this->router->get('{id}/toggle_active',  ['as' => 'toggle_active',  'uses' => "{$controller}@toggleActive"]);
                $this->router->get('{id}/toggle_trash',   ['as' => 'toggle_trash',   'uses' => "{$controller}@toggleTrash"]);
                $this->router->get('{id}/media_upload',   ['as' => 'media_upload',   'uses' => "{$controller}@mediaUpload"]);
            });
            /*
            |--------------------------------------------------------------------------
            | Categorias de Mídias
            |--------------------------------------------------------------------------
            */
            $this->router->group([
                'as'        => 'medias_categories.',
                'prefix'    => 'medias-categories',
                'namespace' => 'Medias',
            ], function () {
                $controller = 'CategoryController';
                $this->router->get('/',                   ['as' => 'index',          'uses' => "{$controller}@index"]);
                $this->router->get('create',              ['as' => 'create',         'uses' => "{$controller}@create"]);
                $this->router->get('trashed',             ['as' => 'trashed',        'uses' => "{$controller}@getTrashed"]);
                $this->router->post('store',              ['as' => 'store',          'uses' => "{$controller}@store"]);
                $this->router->get('{id}',                ['as' => 'show',           'uses' => "{$controller}@show"]);
                $this->router->get('{id}/edit',           ['as' => 'edit',           'uses' => "{$controller}@edit"]);
                $this->router->post('{id}/update',        ['as' => 'update',         'uses' => "{$controller}@update"]);
                $this->router->get('{id}/destroy',        ['as' => 'destroy',        'uses' => "{$controller}@destroy"]);
                $this->router->get('{id}/toggle_active',  ['as' => 'toggle_active',  'uses' => "{$controller}@toggleActive"]);
                $this->router->get('{id}/toggle_trash',   ['as' => 'toggle_trash',   'uses' => "{$controller}@toggleTrash"]);
                $this->router->get('{id}/media_upload',   ['as' => 'media_upload',   'uses' => "{$controller}@mediaUpload"]);
            });
            /*
            |--------------------------------------------------------------------------
            | Formulários de Contato
            |--------------------------------------------------------------------------
            */
            $this->router->group([
                'as'        => 'contacts.',
                'prefix'    => 'contacts',
                'namespace' => 'Contacts',
            ], function () {
                $controller = 'ContactController';
                $this->router->get('/',                   ['as' => 'index',          'uses' => "{$controller}@index"]);
                $this->router->get('create',              ['as' => 'create',         'uses' => "{$controller}@create"]);
                $this->router->get('trashed',             ['as' => 'trashed',        'uses' => "{$controller}@getTrashed"]);
                $this->router->post('store',              ['as' => 'store',          'uses' => "{$controller}@store"]);
                $this->router->get('{id}',                ['as' => 'show',           'uses' => "{$controller}@show"]);
                $this->router->get('{id}/edit',           ['as' => 'edit',           'uses' => "{$controller}@edit"]);
                $this->router->post('{id}/update',        ['as' => 'update',         'uses' => "{$controller}@update"]);
                $this->router->get('{id}/destroy',        ['as' => 'destroy',        'uses' => "{$controller}@destroy"]);
                $this->router->get('{id}/toggle_active',  ['as' => 'toggle_active',  'uses' => "{$controller}@toggleActive"]);
                $this->router->get('{id}/toggle_trash',   ['as' => 'toggle_trash',   'uses' => "{$controller}@toggleTrash"]);
                $this->router->get('{id}/media_upload',   ['as' => 'media_upload',   'uses' => "{$controller}@mediaUpload"]);
            });
            /*
            |--------------------------------------------------------------------------
            | Mensagens de Formulários de Contato
            |--------------------------------------------------------------------------
            */
            $this->router->group([
                'as'        => 'contacts-messages.',
                'prefix'    => 'contacts-messages',
                'namespace' => 'Contacts',
            ], function () {
                $controller = 'MessageController';
                $this->router->get('/',                   ['as' => 'index',          'uses' => "{$controller}@index"]);
                $this->router->get('trashed',             ['as' => 'trashed',        'uses' => "{$controller}@getTrashed"]);
                $this->router->get('{id}',                ['as' => 'show',           'uses' => "{$controller}@show"]);
                $this->router->get('{id}/destroy',        ['as' => 'destroy',        'uses' => "{$controller}@destroy"]);
                $this->router->get('{id}/toggle_active',  ['as' => 'toggle_active',  'uses' => "{$controller}@toggleActive"]);
                $this->router->get('{id}/toggle_trash',   ['as' => 'toggle_trash',   'uses' => "{$controller}@toggleTrash"]);
                $this->router->get('{id}/media_upload',   ['as' => 'media_upload',   'uses' => "{$controller}@mediaUpload"]);
            });
        });
    }
}