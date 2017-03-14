<?php

namespace App\Support\Panels\Providers;

use App\Support\Panels\Http\ViewComposers\PanelViewComposer;
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