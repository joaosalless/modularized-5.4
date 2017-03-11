<?php

namespace App\Domains\Users\Customer\Rules;

use App\Domains\Users\Customer\User;
use App\Support\Database\Eloquent\Contracts\UserContract;
use App\Support\Rules\Rules;

class UserRules extends Rules
{

    protected $entity = User::class;

    public function defaultRules()
    {
        return [

        ];
    }


    public function creating($callback = null): array
    {
        return $this->returnRules(array_merge(
            [
                'email'    => "required|email|max:255|unique:{$this->entity->getTable()}",
                'password' => 'required|min:6',
            ], $this->getProfileRules($this->entity, 'creating')
        ), $callback);
    }


    public function updating($callback = null): array
    {
        return $this->returnRules(array_merge(
            [

            ], $this->getProfileRules($this->entity, 'updating')
        ), $callback);
    }


    public function updatingPassword($callback = null): array
    {
        return $this->returnRules([
            'password' => 'required|min:6',
        ], $callback);
    }


    public function getProfileRules(UserContract $entity, $action)
    {
        return $entity->profile ? array_dot(['profile' => $entity->profile->rules()->{$action}()]) : null;
    }
}