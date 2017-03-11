<?php

namespace App\Domains\Activities\Presenters;

use App\Domains\Activities\Transformers\ActivityTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class ActivityFractalPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ActivityTransformer();
    }
}