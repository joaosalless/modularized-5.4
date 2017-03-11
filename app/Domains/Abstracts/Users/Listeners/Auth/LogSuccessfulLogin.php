<?php

namespace App\Domains\Abstracts\Users\Listeners\Auth;

use GeoIP;
use Illuminate\Auth\Events\Login;
use App\Domains\Abstracts\Users\Listeners\AbstractListener;

class LogSuccessfulLogin extends AbstractListener
{
    /**
     * Handle the event.
     *
     * @param  Login $event
     * @return void
     */
    public function handle(Login $event)
    {
        $user = $event->user;

        if (config("laravel-activitylog.enabled")) {
            activity()
                ->causedBy($user)
                ->withProperties([
                    'action_type' => 'login',
                    'action_result' => 'successful',
                    'geoip' => app('geoip')->getLocation()->toArray(),
                ])
                ->log("login successful");
        }
    }
}
