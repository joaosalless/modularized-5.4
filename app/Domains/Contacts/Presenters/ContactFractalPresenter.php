<?php

namespace App\Domains\Contacts\Presenters;

use App\Domains\Contacts\Transformers\ContactTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ContactFractalPresenter
 *
 * @package  App\Domains\Contacts
 */
class ContactFractalPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return  \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ContactTransformer();
    }
}