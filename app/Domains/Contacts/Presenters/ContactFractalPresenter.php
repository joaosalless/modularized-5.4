<?php

namespace App\Domains\Contacts\Presenters;

use App\Domains\Contacts\Transformers\ContactTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class ContactFractalPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ContactTransformer();
    }
}