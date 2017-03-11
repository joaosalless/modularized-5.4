<?php

namespace App\Units\Panel\Master\Providers;

use App\Units\Panel\Master\Http\ViewComposers\PanelViewComposer;
use Illuminate\Support\ServiceProvider;
use View;

class ViewComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->addComposer([
            '*',
        ], PanelViewComposer::class);
    }

    protected function addComposer($views, $callback)
    {
        View::composer($views, $callback);
    }
}