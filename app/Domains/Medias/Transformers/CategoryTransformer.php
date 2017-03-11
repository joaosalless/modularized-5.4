<?php

namespace App\Domains\Medias\Transformers;

use App\Domains\Medias\Category;
use League\Fractal\TransformerAbstract;

class CategoryTransformer extends TransformerAbstract
{
    protected $availableIncludes = [

    ];

    protected $defaultIncludes = [

    ];

    public function transform(Category $model)
    {
        return [
            'id' => $model->id,
            'title' => $model->title,
            'slug' => $model->slug,
            'intro' => $model->intro,
            'body' => $model->body,
            'active' => $model->active,
            'deleted_at' => $model->deleted_at,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at,
        ];
    }
}