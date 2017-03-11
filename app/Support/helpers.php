<?php

use App\Support\Database\Eloquent\UserContract;
use App\Support\Panels\PanelProperties;


function str_array_dot($str)
{
    $str = str_replace('[', '.', $str);
    $str = str_replace(']', '', $str);

    return $str;
}


function panel($config = 'request'): PanelProperties
{
    return (new PanelProperties($config));
}


function isPanel($provider): bool
{
    return request()->section() === $provider;
}


function isUser($authProvider): bool
{
    $func = [];

    foreach (config('auth.providers') as $provider => $value) {
        $func[$authProvider] = function ($authProvider) {
            return request()->section() === $authProvider;
        };
    }

    return call_user_func($func[$authProvider], $authProvider);
}


function currentUser($authGuard = null)
{
    $guard = $authGuard ?: config('auth.default.guard');

    return auth()->guard($guard)->user();
}