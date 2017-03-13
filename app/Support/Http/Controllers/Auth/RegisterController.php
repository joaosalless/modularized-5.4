<?php

namespace App\Support\Http\Controllers\Auth;

use App\Support\Http\Controllers\Auth\Traits\RegistersUsers;
use Carbon\Carbon;

abstract class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    protected $userRepository;

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     */
    protected function create(array $data)
    {
        return $this->userRepository->create([
            'email'               => $data['email'],
            'password'            => bcrypt($data['password']),
            'password_updated_at' => Carbon::now(),
        ]);
    }
}
