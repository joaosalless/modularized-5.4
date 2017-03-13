<?php

namespace App\Domains\Pages\Presenters;

use App\Domains\Pages\Transformers\PageTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PageFractalPresenter
 *
 * @package  App\Domains\Pages
 */
class PageFractalPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return  \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PageTransformer();
    }
}