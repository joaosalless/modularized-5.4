<?php

namespace App\Domains\Users\Customer\Notifications\Auth;

use App\Support\Notifications\Auth\ResetPasswordNotification as BaseResetPasswordNotification;

class ResetPasswordNotification extends BaseResetPasswordNotification
{
    public $resetPasswordUrl = 'auth/customer/password/reset';
}
