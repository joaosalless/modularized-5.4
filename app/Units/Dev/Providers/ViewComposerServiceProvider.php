<?php

namespace App\Units\Dev\Providers;

use App\Units\Dev\Http\ViewComposers\PanelViewComposer;
use Illuminate\Support\ServiceProvider;
use View;

class ViewComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->addComposer([
            'dev::*',
            'auth_dev::*',
        ], PanelViewComposer::class);
    }

    protected function addComposer($views, $callback)
    {
        View::composer($views, $callback);
    }
}