<?php

namespace App\Domains\Pages;

use App\Domains\Pages\Presenters\CategoryViewPresenter;
use App\Domains\Pages\Rules\CategoryRules;
use App\Support\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $columnTitle           = 'title';
    protected $entityDomainAlias     = 'pages';
    protected $entityTranslationKey  = 'category';
    protected $entityGender          = 'F';
    protected $entityIcon            = 'fa fa-fw fa-file-text';
    protected $entityRouteAlias      = 'pages_categories';
    protected $entityViewsAlias      = 'pages-categories';
    protected $entityRoutePrefix     = 'pages-categories';
    protected $table                 = 'pages_categories';
    protected $mediaCategorySlug     = 'pages_categories';
    protected $rulesFrom             = CategoryRules::class;
    protected $presenter             = CategoryViewPresenter::class;

    protected $entityAllowedMedias   = [
        'images',
        'documents',
    ];

    protected $dates = [
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'slug',
        'intro',
        'body',
        'seo',
        'active',
    ];

    public function pages()
    {
        return $this->hasMany(Page::class, 'category_id', 'id');
    }
}