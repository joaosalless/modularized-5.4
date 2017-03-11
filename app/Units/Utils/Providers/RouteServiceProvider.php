<?php

namespace App\Units\Utils\Providers;

use App\Units\Utils\Routes\Api;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $unitAlias = 'utils';

    protected $namespace = 'App\Units\Utils\Http\Controllers';

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
        $this->mapApiRoutes();
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
            'as'         => "api.",
            'prefix'     => "api",
        ]))->register();
    }
}