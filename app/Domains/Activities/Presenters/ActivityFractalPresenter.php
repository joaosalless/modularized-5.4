<?php

namespace App\Domains\Activities\Presenters;

use App\Domains\Activities\Transformers\ActivityTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ActivityFractalPresenter
 *
 * @package  App\Domains\Activities
 */
class ActivityFractalPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return  \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ActivityTransformer();
    }
}