<?php

namespace App\Domains\Pages\Transformers;

use App\Domains\Pages\Page;
use League\Fractal\TransformerAbstract;

/**
 * Class PageTransformer
 * @package  App\Domains\Pages
 */
class PageTransformer extends TransformerAbstract
{
    protected $availableIncludes = [

    ];

    protected $defaultIncludes = [

    ];

    /**
     * Transform the App\Domains\Pages\Page entity
     * @param  Page $model
     *
     * @return  array
     */
    public function transform(Page $model)
    {
        return [
            'id'          => $model->id,
            'category_id' => $model->category_id,
            'title'       => $model->title,
            'template'    => $model->template,
            'slug'        => $model->slug,
            'intro'       => $model->intro,
            'body'        => $model->body,
            'active'      => $model->active,
            'deleted_at'  => $model->deleted_at,
            'created_at'  => $model->created_at,
            'updated_at'  => $model->updated_at,
        ];
    }
}