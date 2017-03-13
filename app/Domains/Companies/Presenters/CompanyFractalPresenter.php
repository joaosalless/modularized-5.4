<?php

namespace App\Domains\Companies\Presenters;

use App\Domains\Companies\Transformers\CompanyTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CompanyFractalPresenter
 *
 * @package  App\Domains\Companies
 */
class CompanyFractalPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return  \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CompanyTransformer();
    }
}