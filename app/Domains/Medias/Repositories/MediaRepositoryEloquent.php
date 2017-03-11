<?php

namespace App\Domains\Medias\Repositories;

use App\Domains\Medias\Media;
use App\Domains\Medias\Presenters\MediaFractalPresenter;
use App\Support\Repositories\RepositoryEloquent;

class MediaRepositoryEloquent extends RepositoryEloquent implements MediaRepository
{
    protected $fieldSearchable = [
        'titulo'         => 'like',
        'descricao'      => 'like',
        'valor'          => 'like',
        'inicio_vendas'  => 'like',
        'termino_vendas' => 'like',
    ];

    public function model()
    {
        return Media::class;
    }

    public function presenter()
    {
        return MediaFractalPresenter::class;
    }
}
