<?php

namespace App\Domains\Users\Master\Presenters;

use App\Domains\Users\Master\Transformers\UserTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class UserFractalPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new UserTransformer();
    }
}