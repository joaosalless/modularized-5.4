<?php

namespace App\Support\Http\Controllers\Web;

use App\Support\Http\Controllers\Controller as BaseController;
use App\Support\Http\Controllers\Traits\HasViewsTrait;

abstract class Controller extends BaseController
{
    use HasViewsTrait;

    protected $skipPresenter = true;
}
