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

/**
 * Class Activity
 * @package  App\Domains\Activities
 */
class Activity extends ActivityModel implements Transformable, HasMedia
{
    use EloquentUuid;
    use HasMediaTrait;
    use ModelMediasTrait;
    use ModelUtilsTrait;
    use SoftDeletes;
    use TransformableTrait;

    protected $columnTitle           = 'description';
    protected $entityGender          = 'F';
    protected $entityIcon            = 'fa fa-fw fa-clock-o';
    protected $entityRouteAlias      = 'activities';
    protected $entityViewsAlias      = 'activities';
    protected $entityRoutePrefix     = 'activities';
    protected $table                 = 'activity_log';

    protected $entityAllowedMedias   = [];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
