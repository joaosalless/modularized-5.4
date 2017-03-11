<?php

namespace App\Units\Dev\Http\Controllers\Web\Domains;

use File;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Units\Dev\Http\Controllers\Web\Controller;

class EntityController extends Controller
{
    public function showEntity(Request $request): View
    {
        $response = [
            'entity' => (new $request->className())->getEntityStructure(),
        ];

        return $this->view("entities.show")->with($response);
    }

    public function writeEntity(Request $request): View
    {
        $response = [
            'entity' => (new $request->className())->getEntityStructure(),
        ];

        return $this->view("entities.show")->with($response);
    }
}