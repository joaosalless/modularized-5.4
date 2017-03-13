<?php

namespace App\Support\Http\Controllers\Auth;

use App\Support\Http\Controllers\Auth\Traits\ResetsPasswords;

abstract class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

}
