<?php

namespace App\Support\Http\Controllers\Auth\Traits;

use App\Support\Database\Eloquent\Contracts\UserContract;
use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Validator;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return $this->view("auth.register");
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard($this->panel->guard());
    }

    public function register(Request $request)
    {
        $data = $this->formatData($request->all());

        $validator = Validator::make($data, $this->userModel->rules()->creating());

        if ($validator->fails()) {
            alert()->error($validator->getMessageBag());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();
        try {
            $user = $this->create($data);

            $this->createProfile($user, $data);

            event(new Registered($user));

            $this->guard()->login($user);

            DB::commit();

        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }

        return $this->registered($request, $user) ?: redirect($this->redirectPath());
    }

    public function createProfile(UserContract $user, array $data)
    {
        $profile = $data['profile_type'] === $this->companyRepository->model()
            ? $this->companyRepository->create($data['profile'])
            : $this->personRepository->create($data['profile']);

        $user->profile()->associate($profile);
        $user->save();
    }

    public function formatData(array $data) : array
    {
        if ( $data['profile_type'] === $this->companyRepository->model() ) {
            $data['profile']['nome_fantasia'] = $data['profile']['name'];
            unset($data['profile']['name']);
        }

        if ( $data['profile_type'] === $this->personRepository->model() ) {
            $data['profile']['nome'] = $data['profile']['name'];
            unset($data['profile']['name']);
        }

        return $data;
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }
}
