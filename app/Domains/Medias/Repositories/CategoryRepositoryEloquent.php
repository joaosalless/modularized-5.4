<?php

namespace App\Domains\Medias\Repositories;

use App\Domains\Medias\Category;
use App\Domains\Medias\Presenters\CategoryFractalPresenter;
use App\Support\Repositories\RepositoryEloquent;

class CategoryRepositoryEloquent extends RepositoryEloquent implements CategoryRepository
{
    protected $fieldSearchable = [
        'name' => 'like',
        'slug' => 'like',
    ];

    public function categoriesSelect()
    {
        return $this->model->pluck('title', 'id')->toArray();
    }

    public function model()
    {
        return Category::class;
    }

    public function presenter()
    {
        return CategoryFractalPresenter::class;
    }
}
