<?php

namespace App\Domains\Users\Master\Notifications\Auth;

use App\Support\Notifications\Auth\ResetPasswordNotification as BaseResetPasswordNotification;

class ResetPasswordNotification extends BaseResetPasswordNotification
{
    public $resetPasswordUrl = 'auth/master/password/reset';
}
