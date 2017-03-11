<?php

namespace App\Domains\Medias;

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
    protected $entityDomainAlias     = 'medias';
    protected $entityTranslationKey  = 'media';
    protected $entityGender          = 'F';
    protected $entityIcon            = 'fa fa-fw fa-image';
    protected $entityRouteAlias      = 'medias';
    protected $entityViewsAlias      = 'medias';
    protected $entityRoutePrefix     = 'medias';
    protected $table                 = 'media';
    protected $mediaCategorySlug     = 'medias';
    protected $rulesFrom             = MediaRules::class;

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
        'manipulations',
        'dominant_color',
        'custom_properties',
        'order_column',
        'created_at',
        'updated_at',
        'deleted_at',
        'is_cover',
        'in_carousel',
        'mime',
        'extension',
        'category_id',
        'category_slug',
        'title',
        'description',
        'seo_share',
        'active',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}