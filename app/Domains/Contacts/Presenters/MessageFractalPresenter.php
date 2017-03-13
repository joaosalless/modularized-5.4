<?php

namespace App\Domains\Contacts\Presenters;

use App\Domains\Contacts\Transformers\MessageTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class MessageFractalPresenter
 *
 * @package  App\Domains\Contacts
 */
class MessageFractalPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return  \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new MessageTransformer();
    }
}