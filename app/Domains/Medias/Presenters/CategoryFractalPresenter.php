<?php

namespace App\Domains\Medias\Presenters;

use App\Domains\Medias\Transformers\CategoryTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class CategoryFractalPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CategoryTransformer();
    }
}