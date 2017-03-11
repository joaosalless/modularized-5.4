<?php

namespace App\Units\Auth\Http\Controllers;

use App\Support\Http\Controllers\Web\Controller as BaseController;

abstract class Controller extends BaseController
{
    protected $unitAlias = 'auth';
}
