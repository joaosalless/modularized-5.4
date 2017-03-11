<?php

namespace App\Domains\Abstracts\Users\Listeners;

use App\Support\Panels\PanelProperties;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

abstract class AbstractListener
{
    protected $panel;

    public function __construct()
    {
        $this->panel = new PanelProperties();
    }
}