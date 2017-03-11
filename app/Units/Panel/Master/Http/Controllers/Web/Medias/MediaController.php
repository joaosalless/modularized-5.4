<?php

namespace App\Units\Panel\Master\Http\Controllers\Web\Medias;

use App\Domains\Medias\Repositories\CategoryRepository;
use App\Domains\Medias\Repositories\MediaRepository;
use App\Units\Panel\Master\Http\Controllers\Web\Controller;

class MediaController extends Controller
{
    protected $repository;
    protected $categoryRepository;
    protected $entity;


    public function __construct(MediaRepository $repository,
                                CategoryRepository $categoryRepository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->categoryRepository = $categoryRepository;
        $this->entity = $repository->makeModel();
    }


    public function getEntity($id = null) : array
    {
        $response = [
            'entity'       => ($id !== null)
                ? $this->repository->with($this->getEntityRelations())->find($id)
                : $this->repository->makeModel(),
            'categories'   => $this->categoryRepository->pluckForSelect(),
            'actionRoutes' => $this->getActionButtons(),
        ];

        return $response;
    }


    public function getEntityRelations() : array
    {
        return [
            'category',
        ];
    }


    public function getActionButtons() : array
    {
        $response = [
            'model' => [
                'create'          => false,
                'show'            => true,
                'show_media'      => true,
                'edit'            => true,
                'destroy'         => true,
                'toggle_trash'    => true,
                'toggle_active'   => true,
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


    public function formatData(array $data) : array
    {
        return $data;
    }

}