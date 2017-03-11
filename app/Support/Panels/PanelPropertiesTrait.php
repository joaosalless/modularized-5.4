<?php

namespace App\Support\Panels;

use App\Domains\Abstracts\Users\User;
use Exception;

trait PanelPropertiesTrait
{
    protected $guardModel;
    protected $redirectOnLoginToUrl;
    protected $redirectOnLogoutToUrl;


    public function unitAlias(): string
    {
        return $this->authProvider();
    }


    public function authProvider(): string
    {
        return $this->authProvider;
    }


    public function routeAlias(): string
    {
        return $this->authProvider();
    }


    public function authRoutePrefix(): string
    {
        return "auth";
    }


    public function routePrefix(): string
    {
        return $this->authProvider();
    }


    public function authUrl($route = 'login_form', $token = null): string
    {
        $route = $route ? ".{$route}" : '';

        return route("{$this->authRouteAlias()}{$route}", ['panel' => $this->authProvider(), $token ?? 'token' => $token]);
    }


    public function authRouteAlias(): string
    {
        return "auth";
    }


    public function guard($type = 'web'): string
    {
        return $type == 'api' ? $this->guardApi() : $this->guardWeb();
    }


    public function guardApi(): string
    {
        return "{$this->authProvider()}_api";
    }


    public function guardWeb(): string
    {
        return "{$this->authProvider()}_web";
    }


    public function guardPasswordBroker(): string
    {
        return "{$this->authProvider()}";
    }


    public function unitConfig(): array
    {
        if (!empty(config())) {
            return config("panel.{$this->unitAlias()}") !== null ? config("panel.{$this->unitAlias()}") : config("panel.default");
        }

        return $this->config['panel'][$this->unitAlias()];
    }


    public function makeGuardModel()
    {
        $model = app()->make($this->guardModel());

        if (!$model instanceof User) {
            throw new Exception("Class {$this->guardModel()} must be an instance of App\\Domains\\Abstracts\\Users\\User");
        }

        return $this->guardModel = $model;
    }


    public function guardModel(): string
    {
        return !empty(config())
            ? config("auth.providers.{$this->authProvider()}.model")
            : $this->config['auth']['providers'][$this->authProvider()]['model'];
    }


    public function currentUser()
    {
        return auth()->guard($this->guardWeb())->check()
            ?  auth()->guard($this->guardWeb())->user()
            :  null;
    }


    public function homeUrl(): string
    {
        return route("{$this->authProvider()}");
    }


    public function registerUrl(): string
    {
        return $this->authUrl('register');
    }


    public function profileUrl(): string
    {
        return $this->authUrl('profile');
    }


    public function redirectOnLoginToUrl(): string
    {
        return $this->redirectOnLoginToUrl
            ?  $this->redirectOnLoginToUrl
            :  $this->authProvider();
    }


    public function logoutUrl(): string
    {
        return $this->authUrl('logout');
    }


    public function redirectOnLogoutToUrl(): string
    {
        return $this->redirectOnLogoutToUrl
            ?  $this->redirectOnLogoutToUrl
            :  $this->loginUrl();
    }


    public function loginUrl(): string
    {
        return $this->authUrl();
    }


    public function resetPasswordUrl(): string
    {
        return $this->authUrl('password.reset.form');
    }


    public function resetPasswordTokenUrl($token): string
    {
        return $this->authUrl('password.reset.token', $token);
    }

}