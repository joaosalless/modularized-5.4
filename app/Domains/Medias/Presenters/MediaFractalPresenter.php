<?php

namespace App\Domains\Medias\Presenters;

use App\Domains\Medias\Transformers\MediaTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class MediaFractalPresenter
 *
 * @package  App\Domains\Medias
 */
class MediaFractalPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return  \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new MediaTransformer();
    }
}