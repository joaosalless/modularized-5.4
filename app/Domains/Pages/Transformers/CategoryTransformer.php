<?php

namespace App\Domains\Pages\Transformers;

use App\Domains\Pages\Category;
use League\Fractal\TransformerAbstract;

class CategoryTransformer extends TransformerAbstract
{
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
