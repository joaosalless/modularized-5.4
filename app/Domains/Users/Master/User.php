<?php

namespace App\Domains\Users\Master;

use App\Domains\Persons\Person;
use App\Domains\Companies\Company;
use App\Domains\Users\Master\Presenters\UserViewPresenter;
use App\Domains\Users\Master\Rules\UserRules;
use App\Domains\Abstracts\Users\User as AbstractUser;
use App\Domains\Users\Master\Database\Seeders\UserSeeder;
use App\Domains\Users\Master\Notifications\Auth\ResetPasswordNotification;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class User extends AbstractUser
{
    protected $columnTitle          = 'name';
    protected $entityDomainAlias    = 'master_users';
    protected $entityTranslationKey = 'user';
    protected $entityGender         = 'M';
    protected $entityIcon           = 'fa fa-fw fa-user';
    protected $authProvider         = 'master';
    protected $entityRouteAlias     = 'users_master';
    protected $entityViewsAlias     = 'users.master';
    protected $entityRoutePrefix    = 'usuarios-master';
    protected $table                = 'master_users';
    protected $mediaCategorySlug    = 'master_users';
    protected $rulesFrom            = UserRules::class;
    protected $seederFrom           = UserSeeder::class;
    protected $presenter            = UserViewPresenter::class;

    protected $entityAllowedMedias   = [
        'images',
        'videos',
        'audios',
        'documents',
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
        'status',
        'email_verified',
        'email_verified_at',
        'activated',
        'activated_at',
        'banned',
        'banned_at',
        'last_login',
        'last_activity',
    ];

    protected $dates = [
        'password_updated_at',
        'email_verified_at',
        'activated_at',
        'banned_at',
        'last_login',
        'last_activity',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $with = ['profile'];

    protected $appends = ['name'];

    public function getNameAttribute()
    {
        if ($this->profile) {
            return $this->isPerson() ? $this->profile->nome : $this->profile->nome_fantasia;
        }
        return null;
    }

    public function profile() : morphTo
    {
        return $this->morphTo();
    }

    public function isCompany() : bool
    {
        return $this->profile_type ? $this->profile_type == Company::class : null;
    }

    public function isPerson() : bool
    {
        return $this->profile_type ? $this->profile_type == Person::class : null;
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}