<?php

namespace App\Domains\Users\Master\Rules;

use App\Domains\Users\Master\User;
use App\Support\Database\Eloquent\Contracts\UserContract;
use App\Support\Rules\Rules;

class UserRules extends Rules
{

    protected $entity = User::class;


    public function defaultRules()
    {
        return [
            'username' => "unique:{$this->entity->getTable()}",
        ];
    }


    public function creating($callback = null): array
    {
        return $this->returnRules(array_merge(
            [
                'email'    => "required|email|max:255|unique:{$this->entity->getTable()}",
                'password' => "required|min:6",
                'terms'    => 'required',
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
        return $entity->profile ? array_dot(['profile' => $entity->profile->rules()->{$action}()]) : [];
    }
}