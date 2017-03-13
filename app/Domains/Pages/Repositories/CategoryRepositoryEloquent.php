<?php

namespace App\Domains\Pages\Repositories;

use App\Domains\Pages\Category;
use App\Support\Repositories\RepositoryEloquent;
use App\Domains\Pages\Presenters\CategoryFractalPresenter;

/**
 * Class CategoryRepositoryEloquent
 * @package  App\Domains\Pages
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