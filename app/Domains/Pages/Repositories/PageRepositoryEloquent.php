<?php

namespace App\Domains\Pages\Repositories;

use App\Domains\Pages\Page;
use App\Support\Repositories\RepositoryEloquent;
use App\Domains\Pages\Presenters\PageFractalPresenter;

/**
 * Class PageRepositoryEloquent
 * @package  App\Domains\Pages
 */
class PageRepositoryEloquent extends RepositoryEloquent implements PageRepository
{
    protected $fieldSearchable = [
        'title'      => 'like',
        'template'   => 'like',
        'slug'       => 'like',
        'intro'      => 'like',
        'body'       => 'like',
        'active'     => 'like',
        'deleted_at' => 'like',
        'created_at' => 'like',
        'updated_at' => 'like',
    ];

    /**
     * Specify Model class name
     *
     * @return  string
     */
    public function model()
    {
        return Page::class;
    }

    /**
     * Specify Fractal Presenter class name
     *
     * @return  string
     */
    public function presenter()
    {
        return PageFractalPresenter::class;
    }
}