<?php

namespace App\Domains\Medias;

use App\Domains\Medias\Presenters\MediaViewPresenter;
use App\Domains\Medias\Rules\MediaRules;
use App\Support\Database\Eloquent\Contracts\ModelContract;
use App\Support\Database\Eloquent\Traits\EloquentUuid;
use App\Support\Database\Eloquent\Traits\HasRules;
use App\Support\Database\Eloquent\Traits\ModelMediasTrait;
use App\Support\Database\Eloquent\Traits\ModelUtilsTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;
use Spatie\MediaLibrary\Media as MediaModel;

class Media extends MediaModel implements Transformable, HasMedia, ModelContract
{
    use EloquentUuid;
    use HasMediaTrait;
    use HasRules;
    use ModelMediasTrait;
    use ModelUtilsTrait;
    use LogsActivity;
    use SoftDeletes;
    use TransformableTrait;

    protected $columnTitle           = 'title';
    protected $entityGender          = 'F';
    protected $entityIcon            = 'fa fa-fw fa-image';
    protected $entityRouteAlias      = 'medias';
    protected $entityViewsAlias      = 'medias';
    protected $entityRoutePrefix     = 'medias';
    protected $table                 = 'media';
    protected $rulesFrom             = MediaRules::class;
    protected $presenter             = MediaViewPresenter::class;

    protected $entityAllowedMedias   = [
        'images',
        'videos',
        'audios',
        'documents',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'model_id',
        'model_type',
        'collection_name',
        'name',
        'file_name',
        'disk',
        'size',
        'mime_type',
        'manipulations',
        'custom_properties',
        'order_column',
        'is_cover',
        'in_carousel',
        'extension',
        'category_id',
        'category_slug',
        'title',
        'description',
        'dominant_color',
        'active',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}