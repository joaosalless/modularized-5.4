<?php

namespace App\Domains\Abstracts\Users\Listeners\Auth;

use App\Domains\Abstracts\Users\Listeners\AbstractListener;
use Illuminate\Auth\Events\Registered;

class LogRegisteredUser extends AbstractListener
{
    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        //
    }
}
