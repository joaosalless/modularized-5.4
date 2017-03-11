<?php

namespace App\Support\Http\Controllers\Auth;

use App\Support\Http\Controllers\Auth\Traits\HasViewsTrait;
use App\Support\Http\Controllers\Auth\Traits\SendsPasswordResetEmails;

abstract class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use HasViewsTrait;
    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('guest');
    }
}
