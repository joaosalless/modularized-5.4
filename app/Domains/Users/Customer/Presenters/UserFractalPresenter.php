<?php

namespace App\Domains\Users\Customer\Presenters;

use App\Domains\Users\Customer\Transformers\UserTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class UserFractalPresenter
 *
 * @package  App\Domains\Users\Customer
 */
class UserFractalPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return  \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new UserTransformer();
    }
}