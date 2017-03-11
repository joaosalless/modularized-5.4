<?php

namespace App\Domains\Abstracts\Users\Listeners\Auth;

use App\Domains\Abstracts\Users\Listeners\AbstractListener;
use Illuminate\Auth\Events\Failed;

class LogFailedLogin extends AbstractListener
{
    /**
     * Handle the event.
     *
     * @param  Failed $event
     *
     * @return void
     */
    public function handle(Failed $event)
    {
        $user = $this->panel->makeGuardModel()->firstOrNew(['email' => request()->email]);

        if (config("laravel-activitylog.enabled")) {
            activity()
                ->causedBy($user)
                ->withProperties([
                    'action_type' => 'login',
                    'action_result' => 'failed',
                    'geoip' => app('geoip')->getLocation()->toArray(),
                    'credentials' => [
                        'email' => $user->email,
                    ],
                ])
                ->log("login failed");
        }
    }
}
