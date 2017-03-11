<?php

namespace App\Domains\Abstracts\Users\Listeners\Auth;

use App\Domains\Abstracts\Users\Listeners\AbstractListener;
use App\Support\Notifications\Auth\OnLockoutNotification;
use Illuminate\Auth\Events\Lockout;

class LogLockout extends AbstractListener
{
    /**
     * Handle the event.
     *
     * @param  Lockout $event
     * @return void
     */
    public function handle(Lockout $event)
    {
        $user = $this->panel->makeGuardModel()->firstOrNew(['email' => $event->request->email]);

        if ($user->isNotifiable()) {
            $user->notify(new OnLockoutNotification($user));
        }

        if (config("laravel-activitylog.enabled")) {
            activity()
                ->causedBy($user)
                ->withProperties([
                    'action_type' => 'login',
                    'action_result' => 'lockout',
                    'geoip' => app('geoip')->getLocation()->toArray(),
                    'credentials' => [
                        'email' => $user->email,
                    ],
                ])
                ->log("login lockout");
        }
    }
}
