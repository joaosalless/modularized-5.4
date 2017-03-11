<?php

namespace App\Units\Dev\Http\ViewComposers;

use App\Support\Panels\PanelProperties;
use App\Units\Dev\Helpers\EntityHelper;
use Illuminate\Contracts\View\View;

class PanelViewComposer
{
    protected $panel;
    protected $entities;

    public function __construct()
    {
        $this->panel    = new PanelProperties();
        $this->entities = (new EntityHelper())->getEntities($structure = false);
    }

    public function compose(View $view)
    {
        $view->with([
            'panel'    => $this->panel,
            'entities' => $this->entities,
        ]);
    }


}