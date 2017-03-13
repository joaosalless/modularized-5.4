<?php

namespace App\Domains\Medias\Transformers;

use App\Domains\Medias\Media;
use League\Fractal\TransformerAbstract;

/**
 * Class MediaTransformer
 * @package  App\Domains\Medias
 */
class MediaTransformer extends TransformerAbstract
{
    protected $availableIncludes = [

    ];

    protected $defaultIncludes = [

    ];

    /**
     * Transform the App\Domains\Medias\Media entity
     * @param  Media $model
     *
     * @return  array
     */
    public function transform(Media $model)
    {
        return [
            'id'                => $model->id,
            'model_id'          => $model->model_id,
            'model_type'        => $model->model_type,
            'collection_name'   => $model->collection_name,
            'name'              => $model->name,
            'file_name'         => $model->file_name,
            'disk'              => $model->disk,
            'size'              => $model->size,
            'mime_type'         => $model->mime_type,
            'manipulations'     => $model->manipulations,
            'custom_properties' => $model->custom_properties,
            'order_column'      => $model->order_column,
            'is_cover'          => $model->is_cover,
            'in_carousel'       => $model->in_carousel,
            'extension'         => $model->extension,
            'category_id'       => $model->category_id,
            'category_slug'     => $model->category_slug,
            'title'             => $model->title,
            'description'       => $model->description,
            'dominant_color'    => $model->dominant_color,
            'active'            => $model->active,
            'created_at'        => $model->created_at,
            'updated_at'        => $model->updated_at,
            'deleted_at'        => $model->deleted_at,
        ];
    }
}