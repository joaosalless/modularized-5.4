<?php

namespace App\Domains\Medias\Repositories;

use App\Domains\Medias\Category;
use App\Support\Repositories\RepositoryEloquent;
use App\Domains\Medias\Presenters\CategoryFractalPresenter;

/**
 * Class CategoryRepositoryEloquent
 * @package  App\Domains\Medias
 */
class CategoryRepositoryEloquent extends RepositoryEloquent implements CategoryRepository
{
    protected $fieldSearchable = [
        'title'      => 'like',
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
        return Category::class;
    }

    /**
     * Specify Fractal Presenter class name
     *
     * @return  string
     */
    public function presenter()
    {
        return CategoryFractalPresenter::class;
    }
}