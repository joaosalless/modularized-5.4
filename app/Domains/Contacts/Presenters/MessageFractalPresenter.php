<?php

namespace App\Domains\Contacts\Presenters;

use App\Domains\Contacts\Transformers\MessageTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class MessageFractalPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new MessageTransformer();
    }
}