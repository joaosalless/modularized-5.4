<?php

namespace App\Units\Panel\Master\Http\Controllers\Web\Contacts;

use App\Domains\Contacts\Repositories\MessageRepository;
use App\Units\Panel\Master\Http\Controllers\Web\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    protected $repository;
    protected $entity;


    public function __construct(MessageRepository $repository, Request $request)
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
            'contact',
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
                'toggle_trash'    => true,
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
                'toggle_is_cover' => false,
            ],
        ];

        return array_merge(parent::getActionButtons(), $response);
    }


    public function formatData(array $data) : array
    {
        return $data;
    }

}