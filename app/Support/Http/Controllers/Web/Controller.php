<?php

namespace App\Support\Http\Controllers\Web;

use App\Support\Http\Controllers\Traits\BaseControllerTrait;
use App\Support\Http\Controllers\Traits\CrudTrait;
use App\Support\Http\Controllers\Traits\HasFlashMessagesTrait;
use App\Support\Http\Controllers\Traits\HasViewsTrait;
use App\Support\Http\Controllers\Traits\MediaControllerTrait;
use App\Support\Panels\PanelProperties;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use HasViewsTrait;
    use MediaControllerTrait;
    use CrudTrait;
    use BaseControllerTrait;

    protected $authGuard;
    protected $repository;
    protected $routeAlias;
    protected $routePath;
    protected $routePrefix;
    protected $unitAlias;
    protected $panel;

    public function __construct()
    {
        $this->panel = (new PanelProperties());
    }

}
