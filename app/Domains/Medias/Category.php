<?php

namespace App\Domains\Medias;

use App\Domains\Medias\Presenters\CategoryViewPresenter;
use App\Domains\Medias\Rules\CategoryRules;
use App\Support\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Category extends Model
{
    use LogsActivity;
    use SoftDeletes;

    protected $columnTitle       = 'title';
    protected $entityGender      = 'F';
    protected $entityIcon        = 'fa fa-fw fa-image';
    protected $entityRouteAlias  = 'medias_categories';
    protected $entityViewsAlias  = 'medias-categories';
    protected $entityRoutePrefix = 'media-categories';
    protected $table             = 'media_categories';
    protected $rulesFrom         = CategoryRules::class;
    protected $presenter         = CategoryViewPresenter::class;

    protected $entityAllowedMedias   = [
        'images',
        'documents',
    ];

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'title',
        'slug',
        'intro',
        'body',
        'active',
    ];

    public function categoryMedias()
    {
        return $this->hasMany(Media::class, 'category_id', 'id');
    }

}