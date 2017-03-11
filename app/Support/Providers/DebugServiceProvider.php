<?php

namespace App\Support\Providers;

use Illuminate\Support\ServiceProvider;

class DebugServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() === 'local' && php_sapi_name() !== 'cli') {
            $this->app['config']->set('debugbar.enabled', env('DEBUGBAR', false));
        }
    }
}
