<?php

namespace App\Units\Panel\Master\Http\Controllers\Web\Ingressos;

use App\Domains\Ingressos\Repositories\CategoriaRepository;
use App\Domains\Ingressos\Repositories\IngressoRepository;
use App\Units\Panel\Master\Http\Controllers\Web\Controller;
use Carbon\Carbon;

class IngressoController extends Controller
{
    protected $repository;
    protected $categoriaRepository;
    protected $entity;


    public function __construct(IngressoRepository $repository,
                                CategoriaRepository $categoriaRepository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->categoriaRepository = $categoriaRepository;
        $this->entity = $repository->makeModel();
    }


    public function getEntity($id = null): array
    {
        return [
            'entity'       => ($id !== null)
                ? $this->repository->with($this->getEntityRelations())->find($id)
                : $this->repository->makeModel(),
            'categorias'   => $this->categoriaRepository->pluckForSelect(),
            'actionRoutes' => $this->getActionButtons(),
        ];
    }


    public function getEntityRelations(): array
    {
        return [
            'categoria',
        ];
    }


    public function formatData(array $data): array
    {
        $data['inicio_vendas']  = Carbon::createFromFormat('d/m/Y', $data['inicio_vendas']);
        $data['termino_vendas'] = Carbon::createFromFormat('d/m/Y', $data['termino_vendas']);
        $data['validade']       = Carbon::createFromFormat('d/m/Y', $data['validade']);

        return $data;
    }

}