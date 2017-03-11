<?php

namespace App\Units\Dev\Http\Controllers\Web;

use App\Units\Dev\Helpers\EntityHelper;
use App\Support\Http\Controllers\Web\Controller as BaseController;

abstract class Controller extends BaseController
{
    protected $unitAlias = 'dev';

    public function getEntities($structure = false)
    {
        return (new EntityHelper())->getEntities($structure);
    }
}