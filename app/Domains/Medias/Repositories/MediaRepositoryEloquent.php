<?php

namespace App\Domains\Medias\Repositories;

use App\Domains\Medias\Media;
use App\Support\Repositories\RepositoryEloquent;
use App\Domains\Medias\Presenters\MediaFractalPresenter;

/**
 * Class MediaRepositoryEloquent
 * @package  App\Domains\Medias
 */
class MediaRepositoryEloquent extends RepositoryEloquent implements MediaRepository
{
    protected $fieldSearchable = [
        'model_type'        => 'like',
        'collection_name'   => 'like',
        'name'              => 'like',
        'file_name'         => 'like',
        'disk'              => 'like',
        'size'              => 'like',
        'mime_type'         => 'like',
        'manipulations'     => 'like',
        'custom_properties' => 'like',
        'order_column'      => 'like',
        'is_cover'          => 'like',
        'in_carousel'       => 'like',
        'extension'         => 'like',
        'category_slug'     => 'like',
        'title'             => 'like',
        'description'       => 'like',
        'dominant_color'    => 'like',
        'active'            => 'like',
        'created_at'        => 'like',
        'updated_at'        => 'like',
        'deleted_at'        => 'like',
    ];

    /**
     * Specify Model class name
     *
     * @return  string
     */
    public function model()
    {
        return Media::class;
    }

    /**
     * Specify Fractal Presenter class name
     *
     * @return  string
     */
    public function presenter()
    {
        return MediaFractalPresenter::class;
    }
}