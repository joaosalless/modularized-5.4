<?php

namespace App\Domains\Activities\Transformers;

use App\Domains\Activities\Activity;
use League\Fractal\TransformerAbstract;

class ActivityTransformer extends TransformerAbstract
{
    public function transform(Activity $model)
    {
        return [
            'id'         => (int) $model->id,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at,
        ];
    }
}
