<?php

namespace App\Support\Http\Controllers\Auth;

use App\Support\Http\Controllers\Auth\Traits\AuthenticatesUsers;
use App\Support\Http\Controllers\Auth\Traits\HasViewsTrait;

abstract class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your pages screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use HasViewsTrait;
    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('guest', ['except' => 'logout']);
    }
}
