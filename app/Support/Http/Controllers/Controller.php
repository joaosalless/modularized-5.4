<?php

namespace App\Support\Http\Controllers;

use App\Support\Http\Controllers\Traits\BaseControllerTrait;
use App\Support\Http\Controllers\Traits\CrudTrait;
use App\Support\Panels\PanelProperties;
use App\Support\Repositories\RepositoryContract;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use CrudTrait;
    use BaseControllerTrait;

    /**
     * Controller Entity
     *
     * @var string
     */
    protected $entity;

    /**
     * Panel
     *
     * @var PanelProperties
     */
    protected $panel;

    /**
     * Controller Entity Repository
     *
     * @var RepositoryContract
     */
    protected $repository;

    /**
     * Unit Alias for Views
     *
     * @var string
     */
    protected $unitAlias;

    /**
     * Skip Fractal Presenter
     *
     * @var bool
     */
    protected $skipPresenter = false;

    /**
     * Controller constructor.
     *
     * @param RepositoryContract $repository
     */
    public function __construct(RepositoryContract $repository = null)
    {
        $this->panel = (new PanelProperties());

        if ($repository !== null) {
            $this->repository = $repository;
            $this->repository->skipPresenter($this->skipPresenter);
            $this->entity = $repository->makeModel();
        }
    }

    /**
     * Get Entity
     *
     * @param null $id
     * @return array
     */
    public function getEntity($id = null): array
    {
        $response = [
            'entity' => ($id !== null)
                ? $this->repository->with($this->getEntityRelations())->find($id)
                : $this->entity,
            'actionRoutes' => $this->getActionButtons(),
        ];

        return $response;
    }

    /**
     * Get Entity Relations
     *
     * Specify the entity relationships to be loaded
     *
     * @return array
     */
    public function getEntityRelations(): array
    {
        return [

        ];
    }

    /**
     * Format Request Data
     *
     * Override this method for format your form data before save.
     *
     * @param array $data
     * @return array
     */
    public function formatData(array $data): array
    {
        return $data;
    }
}