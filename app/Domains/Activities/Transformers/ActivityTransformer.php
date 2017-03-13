<?php

namespace App\Domains\Activities\Transformers;

use App\Domains\Activities\Activity;
use League\Fractal\TransformerAbstract;

/**
 * Class ActivityTransformer
 * @package  App\Domains\Activities
 */
class ActivityTransformer extends TransformerAbstract
{
    protected $availableIncludes = [

    ];

    protected $defaultIncludes = [

    ];

    /**
     * Transform the App\Domains\Activities\Activity entity
     * @param  Activity $model
     *
     * @return  array
     */
    public function transform(Activity $model)
    {
        return [
            'id'           => $model->id,
            'log_name'     => $model->log_name,
            'description'  => $model->description,
            'subject_id'   => $model->subject_id,
            'subject_type' => $model->subject_type,
            'causer_id'    => $model->causer_id,
            'causer_type'  => $model->causer_type,
            'properties'   => $model->properties,
            'created_at'   => $model->created_at,
            'updated_at'   => $model->updated_at,
            'deleted_at'   => $model->deleted_at,
        ];
    }
}