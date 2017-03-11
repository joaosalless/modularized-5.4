<?php

namespace App\Units\Panel\Master\Http\Controllers\Web\Ingressos;

use App\Domains\Ingressos\Repositories\CategoriaRepository;
use App\Units\Panel\Master\Http\Controllers\Web\Controller;

class CategoriaController extends Controller
{
    protected $repository;
    protected $entity;


    public function __construct(CategoriaRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->entity = $repository->makeModel();
    }


    public function getEntity($id = null) : array
    {
        $response = [
            'entity'       => ($id !== null)
                ? $this->repository->with($this->getEntityRelations())->find($id)
                : $this->repository->makeModel(),
            'actionRoutes' => $this->getActionButtons(),
        ];

        return $response;
    }


    public function getEntityRelations() : array
    {
        return [
            'ingressos',
        ];
    }


    public function formatData(array $data) : array
    {
        return $data;
    }

}