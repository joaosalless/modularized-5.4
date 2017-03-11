<?php

namespace App\Units\Panel\Master\Http\Controllers\Web\Pages;

use App\Domains\Pages\Repositories\CategoryRepository;
use App\Domains\Pages\Repositories\PageRepository;
use App\Units\Panel\Master\Http\Controllers\Web\Controller;

class PageController extends Controller
{
    protected $repository;
    protected $categoryRepository;
    protected $entity;


    public function __construct(PageRepository $repository,
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
            'medias',
        ];
    }


    public function formatData(array $data) : array
    {
        return $data;
    }
}