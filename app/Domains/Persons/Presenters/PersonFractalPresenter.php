<?php

namespace App\Domains\Persons\Presenters;

use App\Domains\Persons\Transformers\PersonTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PersonFractalPresenter
 *
 * @package  App\Domains\Persons
 */
class PersonFractalPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return  \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PersonTransformer();
    }
}