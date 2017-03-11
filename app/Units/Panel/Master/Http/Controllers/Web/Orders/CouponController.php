<?php

namespace App\Units\Panel\Master\Http\Controllers\Web\Orders;

use App\Domains\Orders\Repositories\CouponRepository;
use App\Units\Panel\Master\Http\Controllers\Web\Controller;

class CouponController extends Controller
{
    protected $repository;

    protected $entity;


    public function __construct(CouponRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->entity = $repository->makeModel();
    }


    public function getEntity($id = null): array
    {
        $response = [
            'entity'       => ($id !== null)
                ? $this->repository->with($this->getEntityRelations())->find($id)
                : $this->repository->makeModel(),
            'actionRoutes' => $this->getActionButtons(),
        ];

        return $response;
    }


    public function getEntityRelations(): array
    {
        return [
            'order',
        ];
    }


    public function formatData(array $data): array
    {
        return $data;
    }
}