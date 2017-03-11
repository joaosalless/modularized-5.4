<?php

namespace App\Domains\Companies\Presenters;

use App\Domains\Companies\Transformers\CompanyTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class CompanyFractalPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CompanyTransformer();
    }
}