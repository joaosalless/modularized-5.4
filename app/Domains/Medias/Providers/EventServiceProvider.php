<?php

namespace App\Domains\Medias\Providers;

use App\Domains\Medias\Listeners\MediaEventSubscriber;
use App\Support\Providers\AbstractEventServiceProvider;

class EventServiceProvider extends AbstractEventServiceProvider
{
    protected $listen = [

    ];

    protected $subscribe = [
        MediaEventSubscriber::class,
    ];
}
