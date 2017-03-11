<?php

namespace App\Domains\Users\Customer\Presenters;

use App\Support\Database\Eloquent\Presenters\ViewPresenter;

/**
 * Class UserViewPresenter
 * @package  App\Domains\Users\Customer
 */
class UserViewPresenter extends ViewPresenter
{
    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getPasswordUpdatedAt()
    {
        return $this->password_updated_at->format('d/m/Y H:i:s');
    }


    public function getPasswordUpdatedAtDate()
    {
        return $this->password_updated_at->format('d/m/Y');
    }


    public function getPasswordUpdatedAtTime()
    {
        return $this->password_updated_at->format('H:i:s');
    }


    public function getPasswordUpdatedAtForHumans()
    {
        return $this->password_updated_at->diffForHumans();
    }
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function getProfileId()
    {
        return $this->profile_id;
    }

    public function getProfileType()
    {
        return $this->profile_type;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getEmailVerified()
    {
        return $this->email_verified;
    }

    public function getEmailVerifiedAt()
    {
        return $this->email_verified_at->format('d/m/Y H:i:s');
    }


    public function getEmailVerifiedAtDate()
    {
        return $this->email_verified_at->format('d/m/Y');
    }


    public function getEmailVerifiedAtTime()
    {
        return $this->email_verified_at->format('H:i:s');
    }


    public function getEmailVerifiedAtForHumans()
    {
        return $this->email_verified_at->diffForHumans();
    }
    public function getBanned()
    {
        return $this->banned;
    }

    public function getBannedAt()
    {
        return $this->banned_at->format('d/m/Y H:i:s');
    }


    public function getBannedAtDate()
    {
        return $this->banned_at->format('d/m/Y');
    }


    public function getBannedAtTime()
    {
        return $this->banned_at->format('H:i:s');
    }


    public function getBannedAtForHumans()
    {
        return $this->banned_at->diffForHumans();
    }
    public function getLastLogin()
    {
        return $this->last_login->format('d/m/Y H:i:s');
    }


    public function getLastLoginDate()
    {
        return $this->last_login->format('d/m/Y');
    }


    public function getLastLoginTime()
    {
        return $this->last_login->format('H:i:s');
    }


    public function getLastLoginForHumans()
    {
        return $this->last_login->diffForHumans();
    }
    public function getLastActivity()
    {
        return $this->last_activity->format('d/m/Y H:i:s');
    }


    public function getLastActivityDate()
    {
        return $this->last_activity->format('d/m/Y');
    }


    public function getLastActivityTime()
    {
        return $this->last_activity->format('H:i:s');
    }


    public function getLastActivityForHumans()
    {
        return $this->last_activity->diffForHumans();
    }
    public function getActive()
    {
        return $this->active ? 'Sim' : 'Não';
    }

}