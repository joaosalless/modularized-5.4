<?php

namespace App\Domains\Abstracts\Users\Listeners\Auth;

use App\Domains\Abstracts\Users\Listeners\AbstractListener;
use GeoIP;
use Illuminate\Auth\Events\Authenticated;

class LogAuthenticated extends AbstractListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Handle the event.
     *
     * @param  Authenticated $event
     *
     * @return void
     */
    public function handle(Authenticated $event)
    {
        $user = $event->user;

        if (config("laravel-activitylog.enabled")) {
            activity()
                ->causedBy($user)
                ->withProperties([
                    'action_type'   => 'authenticated',
                    'action_result' => 'success',
                    'geoip'         => app('geoip')->getLocation()->toArray(),
                ])
                ->log("authenticated");
        }
    }
}
