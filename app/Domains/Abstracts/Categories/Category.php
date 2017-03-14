<?php

namespace App\Domains\Abstracts\Categories;

use App\Domains\Abstracts\Categories\Rules\CategoryRules;
use App\Support\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class Category extends Model
{
    use SoftDeletes;

    protected $columnTitle           = 'title';
    protected $entityGender          = 'F';
    protected $entityIcon            = 'fa fa-fw fa-file-text';
    protected $entityRouteAlias      = 'abstract_category';
    protected $entityViewsAlias      = 'abstract-category';
    protected $entityRoutePrefix     = 'abstract-category';
    protected $table                 = 'abstract_category';
    protected $rulesFrom             = CategoryRules::class;

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
}