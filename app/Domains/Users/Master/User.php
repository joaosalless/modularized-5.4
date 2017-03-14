<?php

namespace App\Domains\Users\Master;

use App\Domains\Users\Master\Presenters\UserViewPresenter;
use App\Domains\Users\Master\Rules\UserRules;
use App\Domains\Abstracts\Users\User as AbstractUser;
use App\Domains\Users\Master\Database\Seeders\UserSeeder;
use App\Domains\Users\Master\Notifications\Auth\ResetPasswordNotification;

class User extends AbstractUser
{
    protected $columnTitle       = 'name';
    protected $entityDomainAlias = 'master_users';
    protected $entityGender      = 'M';
    protected $entityIcon        = 'fa fa-fw fa-user';
    protected $authProvider      = 'master';
    protected $entityRouteAlias  = 'users_master';
    protected $entityViewsAlias  = 'users.master';
    protected $entityRoutePrefix = 'usuarios-master';
    protected $table             = 'master_users';
    protected $rulesFrom         = UserRules::class;
    protected $seederFrom        = UserSeeder::class;
    protected $presenter         = UserViewPresenter::class;

    protected $entityAllowedMedias   = [
        'images',
        'documents',
    ];

    protected $dates = [
        'password_updated_at',
        'email_verified_at',
        'banned_at',
        'last_login',
        'last_activity',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'username',
        'email',
        'password',
        'password_updated_at',
        'remember_token',
        'profile_id',
        'profile_type',
        'role',
        'email_verified',
        'email_verified_at',
        'banned',
        'banned_at',
        'last_login',
        'last_activity',
        'active',
    ];

    public function getAvailableRoles() : array
    {
        return [

        ];
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}