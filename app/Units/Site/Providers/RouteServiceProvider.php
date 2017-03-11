<?php

namespace App\Units\Site\Providers;

use App\Units\Site\Routes\Web;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $unitAlias = 'site';

    protected $namespace = 'App\Units\Site\Http\Controllers';

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
    }

    /**
     * Define the "api" routes for the application.
     * These routes are typically stateless.
     */
    protected function mapWebRoutes()
    {
        (new Web([
            'middleware' => ['cors', 'api'],
            'namespace'  => "{$this->namespace}",
            'as'         => "site.",
        ]))->register();
    }
}