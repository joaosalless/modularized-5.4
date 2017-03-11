<?php

namespace App\Support\Http\Controllers\Auth;

use App\Support\Http\Controllers\Traits\HasFlashMessagesTrait;
use App\Support\Http\Controllers\Traits\HasViewsTrait;
use App\Support\Panels\PanelProperties;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use HasViewsTrait;

    protected $panel;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->panel = (new PanelProperties());
    }
}