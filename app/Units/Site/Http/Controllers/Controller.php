<?php

namespace App\Units\Site\Http\Controllers;

use App\Support\Http\Controllers\Web\Controller as BaseController;

abstract class Controller extends BaseController
{
    protected $unitAlias = 'site';
}
