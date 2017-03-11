<?php

namespace App\Domains\Users\Customer\Transformers;

use App\Domains\Companies\Transformers\CompanyTransformer;
use App\Domains\Persons\Transformers\PersonTransformer;
use App\Domains\Users\Customer\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['profile'];

    public function transform(User $model)
    {
        return [
            'id'                  => $model->id,
            'username'            => $model->username,
            'email'               => $model->email,
            'password'            => $model->password,
            'password_updated_at' => $model->password_updated_at,
            'remember_token'      => $model->remember_token,
            'profile_id'          => $model->profile_id,
            'profile_type'        => $model->profile_type,
            'role'                => $model->role,
            'status'              => $model->status,
            'email_verified'      => $model->email_verified,
            'email_verified_at'   => $model->email_verified_at,
            'activated'           => $model->activated,
            'activated_at'        => $model->activated_at,
            'banned'              => $model->banned,
            'banned_at'           => $model->banned_at,
            'last_login'          => $model->last_login,
            'last_activity'       => $model->last_activity,
            'deleted_at'          => $model->deleted_at,
            'created_at'          => $model->created_at,
            'updated_at'          => $model->updated_at,
        ];
    }

    public function includeProfile(User $model)
    {
        if ($model->profile) {
            if ($model->isCompany()) {
                return $this->item($model->profile, new CompanyTransformer());
            }
            if ($model->isPerson()) {
                return $this->item($model->profile, new PersonTransformer());
            }
        }
        return null;
    }
}
