<?php

namespace App\Domains\Abstracts\Users\Listeners\Auth;

use App\Domains\Abstracts\Users\Listeners\AbstractListener;
use Illuminate\Auth\Events\Attempting;

class LogAuthenticationAttempt extends AbstractListener
{
    /**
     * Handle the event.
     *
     * @param  Attempting $event
     *
     * @return void
     */
    public function handle(Attempting $event)
    {

    }
}
