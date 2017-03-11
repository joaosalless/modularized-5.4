<?php

namespace App\Units\Panel\Customer\Providers;

use App\Units\Panel\Customer\Http\ViewComposers\PanelViewComposer;
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