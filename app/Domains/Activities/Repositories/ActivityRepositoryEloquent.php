<?php

namespace App\Domains\Activities\Repositories;

use App\Domains\Activities\Activity;
use App\Domains\Activities\Presenters\ActivityFractalPresenter;
use App\Support\Repositories\RepositoryEloquent;

class ActivityRepositoryEloquent extends RepositoryEloquent implements ActivityRepository
{
    protected $fieldSearchable = [
        'log_name'     => 'like',
        'description'  => 'like',
        'subject_id'   => 'like',
        'subject_type' => 'like',
        'causer_id'    => 'like',
        'causer_type'  => 'like',
        'properties'   => 'like',
        'created_at'   => 'like',
        'updated_at'   => 'like',
    ];

    public function model()
    {
        return Activity::class;
    }

    public function presenter()
    {
        return ActivityFractalPresenter::class;
    }
}
