<?php

namespace App\Units\Panel\Customer\Http\ViewComposers;

use App\Support\Panels\PanelProperties;
use Illuminate\Contracts\View\View;

class PanelViewComposer
{
    private $panel;

    public function __construct()
    {
        $this->panel = new PanelProperties();
    }

    public function compose(View $view)
    {
        $view->with([
            'panel'  => $this->panel,
        ]);
    }
}