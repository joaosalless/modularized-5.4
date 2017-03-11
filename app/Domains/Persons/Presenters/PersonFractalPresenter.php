<?php

namespace App\Domains\Persons\Presenters;

use App\Domains\Persons\Transformers\PersonTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class PersonFractalPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PersonTransformer();
    }
}