<?php

namespace App\Domains\Pages\Repositories;

use App\Domains\Pages\Category;
use App\Domains\Pages\Presenters\CategoryFractalPresenter;
use App\Support\Repositories\RepositoryEloquent;

class CategoryRepositoryEloquent extends RepositoryEloquent implements CategoryRepository
{
    protected $fieldSearchable = [
        'name' => 'like',
        'slug' => 'like',
    ];

    public function getForSelect()
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
