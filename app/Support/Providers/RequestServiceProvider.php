<?php

namespace App\Support\Providers;

use App\Support\Panels\PanelProperties;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class RequestServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->registerSection();
        $this->registerAthProvider();
        $this->registerGuard();
        $this->registerPanel();
    }


    protected function registerSection()
    {
        Request::macro('section', function (): string {
            foreach (config('auth.providers') as $provider => $value) {
                if (request()->segment(1) === $provider) {
                    return $provider;
                }
            }

            return config('auth.defaults.provider');
        });
    }


    protected function registerAthProvider()
    {
        Request::macro('authProvider', function (): string {
            foreach (config('auth.providers') as $provider => $value) {
                if (request()->segment(1) === $provider) {
                    return $provider;
                }
                if (request()->segment(1) === 'auth' && request()->segment(2) === $provider) {
                    return $provider;
                }
            }

            return config('auth.defaults.provider');
        });

        foreach (config('auth.providers') as $provider => $value) {
            Request::macro('is' . Str::title($provider), function () {
                return request()->section() === $provider;
            });
        }
    }


    protected function registerGuard()
    {
        Request::macro('authGuard', function ($suffix = 'web'): string
        {
            $provider = request()->authProvider();

            return $suffix ? "{$provider}_{$suffix}" : $provider;
        });
    }


    protected function registerPanel()
    {
        Request::macro('panel', function ($config = 'request'): PanelProperties
        {
            return new PanelProperties($config);
        });
    }
}