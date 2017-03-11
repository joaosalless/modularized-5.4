<?php

namespace App\Domains\Pages\Presenters;

use App\Domains\Pages\Transformers\PageTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class PageFractalPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PageTransformer();
    }
}