<?php

namespace App\Domains\Abstracts\Users\Providers;

use Illuminate\Auth\Events;
use App\Domains\Abstracts\Users\Listeners;
use App\Support\Providers\AbstractEventServiceProvider;

class EventServiceProvider extends AbstractEventServiceProvider
{
    protected $listen = [
        Events\Registered::class => [
            Listeners\Auth\LogRegisteredUser::class,
        ],

        Events\Attempting::class => [
            Listeners\Auth\LogAuthenticationAttempt::class,
        ],

        Events\Login::class => [
            Listeners\Auth\LogSuccessfulLogin::class,
        ],

        Events\Failed::class => [
            Listeners\Auth\LogFailedLogin::class,
        ],

        Events\Logout::class => [
            Listeners\Auth\LogSuccessfulLogout::class,
        ],

        Events\Lockout::class => [
            Listeners\Auth\LogLockout::class,
        ],
    ];

    protected $subscribe = [

    ];
}
