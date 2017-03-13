<?php

namespace App\Domains\Activities\Repositories;

use App\Domains\Activities\Activity;
use App\Support\Repositories\RepositoryEloquent;
use App\Domains\Activities\Presenters\ActivityFractalPresenter;

/**
 * Class ActivityRepositoryEloquent
 * @package  App\Domains\Activities
 */
class ActivityRepositoryEloquent extends RepositoryEloquent implements ActivityRepository
{
    protected $fieldSearchable = [
        'log_name'     => 'like',
        'description'  => 'like',
        'subject_type' => 'like',
        'causer_type'  => 'like',
        'properties'   => 'like',
        'created_at'   => 'like',
        'updated_at'   => 'like',
        'deleted_at'   => 'like',
    ];

    /**
     * Specify Model class name
     *
     * @return  string
     */
    public function model()
    {
        return Activity::class;
    }

    /**
     * Specify Fractal Presenter class name
     *
     * @return  string
     */
    public function presenter()
    {
        return ActivityFractalPresenter::class;
    }
}