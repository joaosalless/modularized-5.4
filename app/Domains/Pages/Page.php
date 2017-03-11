<?php

namespace App\Domains\Pages;

use App\Domains\Pages\Rules\PageRules;
use App\Support\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes;

    protected $columnTitle           = 'title';
    protected $entityDomainAlias     = 'pages';
    protected $entityTranslationKey  = 'page';
    protected $entityGender          = 'F';
    protected $entityIcon            = 'fa fa-fw fa-file-text';
    protected $entityRouteAlias      = 'pages';
    protected $entityViewsAlias      = 'pages';
    protected $entityRoutePrefix     = 'pages';
    protected $table                 = 'pages';
    protected $mediaCategorySlug     = 'pages';
    protected $rulesFrom             = PageRules::class;

    protected $entityAllowedMedias   = [
        'images',
        'videos',
        'audios',
        'documents',
    ];

    protected $dates = [
        'deleted_at',
    ];

    protected $fillable = [
        'category_id',
        'unit_id',
        'title',
        'template',
        'slug',
        'intro',
        'body',
        'seo',
        'active',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }
}