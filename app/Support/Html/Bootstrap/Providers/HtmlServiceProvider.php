<?php

namespace App\Support\Html\Bootstrap\Providers;

use Html;
use App\Support\Providers\AbstractServiceProvider;

class HtmlServiceProvider extends AbstractServiceProvider
{
    protected $unitAlias = 'bs';

    public function boot()
    {
        $this->registerComponents();
        $this->registerMacros();
    }

    public function registerComponents()
    {
        Html::component('bsText', $this->view('components.form.text'), ['name', 'value', 'attributes']);
        Html::component('bsClipboard', $this->view('components.html.clipboard'), ['target_id', 'attributes']);
    }

    public function registerMacros()
    {

    }
}
