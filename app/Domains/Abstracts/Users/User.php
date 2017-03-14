<?php

namespace App\Domains\Abstracts\Users;

use App\Domains\Activities\Activity;
use App\Domains\Companies\Company;
use App\Domains\Persons\Person;
use App\Support\Database\Eloquent\Contracts\ModelContract;
use App\Support\Database\Eloquent\Contracts\UserContract;
use App\Support\Database\Eloquent\Traits\EloquentUuid;
use App\Support\Database\Eloquent\Traits\HasRules;
use App\Support\Database\Eloquent\Traits\ModelMediasTrait;
use App\Support\Database\Eloquent\Traits\ModelUtilsTrait;
use BrianFaust\Commentable\HasComments;
use BrianFaust\Settingable\Settingable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laracasts\Presenter\PresentableTrait;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

abstract class User extends Authenticatable implements UserContract,
    HasMedia,
    ModelContract,
    Transformable
{
    use EloquentUuid;
    use ModelMediasTrait;
    use ModelUtilsTrait;
    use Notifiable;
    use HasComments;
    use HasMediaTrait;
    use HasRules;
    use LogsActivity;
    use Settingable;
    use SoftDeletes;
    use PresentableTrait;
    use TransformableTrait;

    protected static $ignoreChangedAttributes = [
        'last_activity',
        'last_login',
        'updated_at',
    ];

    protected $columnTitle;
    protected $entityGender;
    protected $entityRouteAlias;
    protected $entityRoutePrefix;
    protected $authRoutePrefix;
    protected $authRouteAlias;
    protected $rulesFrom;
    protected $seederFrom;
    protected $reflectionClass;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $with = ['profile'];

    protected $appends = ['name'];

    public function testUser(): array
    {
        $testUser = (new $this->seederFrom)->getTestUser();

        return env('APP_ENV') === 'local' ? $testUser : ['email' => '', 'password' => ''];
    }

    public function isNotifiable() : bool
    {
        return $this->id ? true : false;
    }

    public function getNameAttribute()
    {
        if ($this->profile) {
            return $this->isPerson() ? $this->profile->nome : $this->profile->nome_fantasia;
        }
        return null;
    }

    public function profile()
    {
        return $this->morphTo();
    }

    public function isCompany()
    {
        return $this->profile_type ? $this->profile_type == Company::class : null;
    }

    public function isPerson()
    {
        return $this->profile_type ? $this->profile_type == Person::class : null;
    }

    public function getProfileTypes()
    {
        return [
            'App\Domains\Persons\Person'    => trans('persons::person.entityName'),
            'App\Domains\Companies\Company' => trans('companies::company.entityName'),
        ];
    }

    public static function findByToken(string $token)
    {
        $resetRecord = app('db')->table('password_resets')->where('token', $token)->first();

        if (empty($resetRecord)) {
            return null;
        }

        return static::where('email', $resetRecord->email)->first();
    }

    public static function findByEmail(string $email)
    {
        return static::where('email', $email)->first();
    }

    public function activities()
    {
        return $this->morphMany(Activity::class, 'causer')
            ->orderBy('created_at', 'desc')
            ->orWhere('description', 'like', 'login%')
            ->orWhere('description', 'like', 'password updated successful')
            ->take(15);
    }

    public function homeUrl(): string
    {
        return "/{$this->authProvider}";
    }

    public function hasNeverLoggedIn(): bool
    {
        return empty($this->password);
    }

    public function registerLastActivity(): User
    {
        $this->last_activity = Carbon::now();

        return $this;
    }

}
