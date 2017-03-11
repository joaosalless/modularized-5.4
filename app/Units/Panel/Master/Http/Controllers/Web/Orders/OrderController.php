<?php

namespace App\Units\Panel\Master\Http\Controllers\Web\Orders;

use App\Domains\Orders\Repositories\OrderRepository;
use App\Units\Panel\Master\Http\Controllers\Web\Controller;

class OrderController extends Controller
{
    protected $repository;
    protected $entity;


    public function __construct(OrderRepository $repository)
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
            'items',
        ];
    }


    public function formatData(array $data) : array
    {
        return $data;
    }
}