<?php

namespace App\Units\Panel\Customer\Providers;

use App\Units\Panel\Customer\Routes\Api;
use App\Units\Panel\Customer\Routes\Console;
use App\Units\Panel\Customer\Routes\Web;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $unitAlias   = 'customer';
    protected $routeAlias  = 'customer';
    protected $routePrefix = 'customer';
    protected $namespace   = 'App\Units\Panel\Customer\Http\Controllers';

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
        $this->mapConsoleRoutes();
    }

    /**
     * Define the "web" routes for the application.
     * These routes all receive session state, CSRF protection, etc.
     */
    protected function mapWebRoutes()
    {
        (new Web([
            'middleware' => ['web', 'auth:customer_web'],
            'namespace'  => "{$this->namespace}\\Web",
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
            'middleware' => ['cors', 'api', 'auth:customer_api'],
            'namespace'  => "{$this->namespace}\\Api",
            'as'         => "api.{$this->routeAlias}.",
            'prefix'     => "api/{$this->routePrefix}",
        ]))->register();
    }

    /**
     * Define the "console" routes for the application.
     * Those routes are the ones defined by
     * artisan->command instead of registered directly
     * on the ConsoleKernel.
     */
    protected function mapConsoleRoutes()
    {
        (new Console())->register();
    }
}