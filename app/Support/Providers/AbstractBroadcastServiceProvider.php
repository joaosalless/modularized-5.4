<?php

namespace App\Support\Providers;

use Broadcast;
use Illuminate\Support\ServiceProvider;

abstract class AbstractBroadcastServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Broadcast::routes();
        $this->mapChannelsRoutes();
    }

    abstract protected function mapChannelsRoutes();
}