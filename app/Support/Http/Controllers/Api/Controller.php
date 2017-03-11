<?php

namespace App\Support\Http\Controllers\Api;

use App\Support\Http\Controllers\Traits\BaseControllerTrait;
use App\Support\Http\Controllers\Traits\CrudControllerTrait;
use App\Support\Http\Controllers\Traits\CrudTrait;
use App\Support\Http\Controllers\Traits\HasFlashMessagesTrait;
use App\Support\Http\Controllers\Traits\MediaControllerTrait;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use MediaControllerTrait;
    use CrudTrait;
    use BaseControllerTrait;

    protected $unitAlias;
    protected $routePath;
    protected $repository;
    protected $categoryRepository;
    protected $subcategoryRepository;
    protected $mediaRepository;
    protected $parameters;

}