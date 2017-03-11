<?php

namespace App\Domains\Abstracts\Users\Rules;

use App\Domains\Abstracts\Users\User;
use App\Support\Database\Eloquent\Contracts\UserContract;
use App\Support\Rules\Rules;

abstract class UserRules extends Rules
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
            ], $this->getProfileRules($this->entity)
        ), $callback);
    }

    public function getProfileRules(UserContract $entity)
    {
        return $entity->profile ? array_dot(['profile' => $entity->profile->rules()->updating()]) : null;
    }

    public function updating($callback = null): array
    {
        return $this->returnRules(array_merge(
            [

            ], $this->getProfileRules($this->entity)
        ), $callback);
    }

    public function updatingPassword($callback = null): array
    {
        return $this->returnRules([
            'password' => 'required|min:6',
        ], $callback);
    }
}