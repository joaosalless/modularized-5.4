<?php

namespace App\Support\Http\Controllers\Auth;

use App\Support\Http\Controllers\Auth\Traits\HasViewsTrait;
use App\Support\Http\Controllers\Auth\Traits\RegistersUsers;
use App\Support\Panels\PanelProperties;
use Validator;

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

    use HasViewsTrait;
    use RegistersUsers;

    protected $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome'     => 'required|max:255',
            'email'    => "required|email|max:255|unique:{$this->panel->makeGuardModel()->getTable()}",
            'password' => 'required|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     *
     * @return \App\Domains\Users\Base\User
     */
    protected function create(array $data)
    {
        return $this->userRepository->create([
            'nome'     => $data['name'],
            'email'    => $data['email'],
            'celular'  => $data['celular'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
