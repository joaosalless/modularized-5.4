<?php

namespace App\Domains\Medias\Presenters;

use App\Domains\Medias\Transformers\CategoryTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CategoryFractalPresenter
 *
 * @package  App\Domains\Medias
 */
class CategoryFractalPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return  \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CategoryTransformer();
    }
}