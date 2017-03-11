<?php

namespace App\Units\Panel\Master\Http\Controllers\Web\Activities;

use App\Domains\Activities\Repositories\ActivityRepository;
use App\Units\Panel\Master\Http\Controllers\Web\Controller;

class ActivityController extends Controller
{
    protected $entity;
    protected $repository;


    public function __construct(ActivityRepository $repository)
    {
        parent::__construct();
        $this->entity     = $repository->makeModel();
        $this->repository = $repository;
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
            'causer',
            'subject',
        ];
    }


    public function getActionButtons(): array
    {
        $response = [
            'model' => [
                'create'          => false,
                'show'            => true,
                'show_media'      => true,
                'edit'            => false,
                'destroy'         => true,
                'toggle_trash'    => false,
                'toggle_active'   => false,
                'toggle_is_cover' => false,
            ],
            'media' => [
                'show'            => true,
                'show_media'      => true,
                'edit'            => true,
                'destroy'         => true,
                'toggle_trash'    => true,
                'toggle_active'   => true,
                'toggle_is_cover' => true,
            ],
        ];

        return $response;
    }
}