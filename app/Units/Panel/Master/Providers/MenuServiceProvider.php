<?php

namespace App\Units\Panel\Master\Providers;

use Illuminate\Support\ServiceProvider;
use Menu;

class MenuServiceProvider extends ServiceProvider
{
    public function register()
    {
//        $panel = panel();

//        Menu::macro('main', function () use ($panel) {
//            return Menu::new()
//            ->route("{$panel->routeAlias()}.dashboard.index", 'Dashboard')
//                ->setActiveFromRequest();
//        });
    }
}