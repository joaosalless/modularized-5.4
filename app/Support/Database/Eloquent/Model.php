<?php

namespace App\Support\Database\Eloquent;

use App\Support\Database\Eloquent\Presenters\ViewPresenter;
use App\Support\Database\Eloquent\Traits\EloquentUuid;
use App\Support\Database\Eloquent\Traits\HasRules;
use App\Support\Database\Eloquent\Contracts\ModelContract;
use App\Support\Database\Eloquent\Traits\ModelMediasTrait;
use App\Support\Database\Eloquent\Traits\ModelUtilsTrait;
use BrianFaust\Commentable\HasComments;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;
use Laracasts\Presenter\PresentableTrait;

abstract class Model extends EloquentModel implements ModelContract,
    Transformable,
    HasMedia
{
    use EloquentUuid;
    use HasComments;
    use HasMediaTrait;
    use HasRules;
    use ModelMediasTrait;
    use ModelUtilsTrait;
    use TransformableTrait;
    use PresentableTrait;

    protected $presenter = ViewPresenter::class;
    protected $columnTitle;
    protected $entityGender;
    protected $entityRouteAlias;
    protected $entityRoutePrefix;
    protected $mediaCategorySlug;
}