<?php

namespace App\Domains\Pages\Repositories;

use App\Domains\Pages\Page;
use App\Domains\Pages\Presenters\PageFractalPresenter;
use App\Support\Repositories\RepositoryEloquent;

class PageRepositoryEloquent extends RepositoryEloquent implements PageRepository
{
    protected $fieldSearchable = [

    ];

    public function model()
    {
        return Page::class;
    }

    public function presenter()
    {
        return PageFractalPresenter::class;
    }
}
