<?php

namespace App\Domains\Pages\Presenters;

use App\Domains\Pages\Transformers\CategoryTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CategoryFractalPresenter
 *
 * @package  App\Domains\Pages
 */
class CategoryFractalPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return  \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CategoryTransformer();
    }
}