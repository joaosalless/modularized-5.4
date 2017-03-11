<?php

namespace App\Units\Panel\Master\Http\Controllers\Web\Contacts;

use App\Domains\Contacts\Repositories\ContactRepository;
use App\Units\Panel\Master\Http\Controllers\Web\Controller;

class ContactController extends Controller
{
    protected $repository;
    protected $entity;


    public function __construct(ContactRepository $repository)
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
            'messages',
        ];
    }


    public function formatData(array $data): array
    {
        return $data;
    }

}