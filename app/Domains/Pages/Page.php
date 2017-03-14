<?php

namespace App\Domains\Pages;

use App\Domains\Pages\Presenters\PageViewPresenter;
use App\Domains\Pages\Rules\PageRules;
use App\Support\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes;

    protected $columnTitle       = 'title';
    protected $entityGender      = 'F';
    protected $entityIcon        = 'fa fa-fw fa-file-text';
    protected $entityRouteAlias  = 'pages';
    protected $entityViewsAlias  = 'pages';
    protected $entityRoutePrefix = 'pages';
    protected $table             = 'pages';
    protected $rulesFrom         = PageRules::class;
    protected $presenter         = PageViewPresenter::class;

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
        'category_id',
        'title',
        'template',
        'slug',
        'intro',
        'body',
        'active',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}