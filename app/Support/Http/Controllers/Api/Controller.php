<?php

namespace App\Support\Http\Controllers\Api;

use App\Support\Http\Controllers\Controller as BaseController;

abstract class Controller extends BaseController
{
    protected $skipPresenter = false;
}