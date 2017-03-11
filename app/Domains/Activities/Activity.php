<?php

namespace App\Domains\Activities;

use App\Support\Database\Eloquent\Traits\EloquentUuid;
use App\Support\Database\Eloquent\Traits\ModelMediasTrait;
use App\Support\Database\Eloquent\Traits\ModelUtilsTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Spatie\Activitylog\Models\Activity as ActivityModel;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Activity extends ActivityModel implements Transformable, HasMedia
{
    use EloquentUuid;
    use HasMediaTrait;
    use ModelMediasTrait;
    use ModelUtilsTrait;
    use SoftDeletes;
    use TransformableTrait;

    protected $columnTitle           = 'description';
    protected $entityDomainAlias     = 'activities';
    protected $entityTranslationKey  = 'activity';
    protected $entityGender          = 'F';
    protected $entityIcon            = 'fa fa-fw fa-clock-o';
    protected $entityAllowedMedias   = [];
    protected $entityRouteAlias      = 'activities';
    protected $entityViewsAlias      = 'activities';
    protected $entityRoutePrefix     = 'activities';
    protected $table                 = 'activity_log';

    protected $dates = [
        'deleted_at',
    ];
}
