<?php

namespace App\Units\Auth\Providers;

use App\Units\Auth\Routes\Api;
use App\Units\Auth\Routes\Web;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $unitAlias   = 'auth';
    protected $routeAlias  = 'auth';
    protected $routePrefix = 'auth';
    protected $namespace   = 'App\Units\Auth\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     */
    public function map()
    {
        $this->mapWebRoutes();
        $this->mapApiRoutes();
    }

    /**
     * Define the "web" routes for the application.
     * These routes all receive session state, CSRF protection, etc.
     */
    protected function mapWebRoutes()
    {
        (new Web([
            'middleware' => ['web'],
            'namespace'  => "{$this->namespace}",
            'as'         => "{$this->routeAlias}.",
            'prefix'     => "{$this->routePrefix}",
        ]))->register();
    }

    /**
     * Define the "api" routes for the application.
     * These routes are typically stateless.
     */
    protected function mapApiRoutes()
    {
        (new Api([
            'middleware' => ['cors', 'api'],
            'namespace'  => "{$this->namespace}\\Api",
            'as'         => "api.{$this->routeAlias}.",
            'prefix'     => "api/{$this->routePrefix}",
        ]))->register();
    }

}