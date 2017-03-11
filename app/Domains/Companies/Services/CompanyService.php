<?php

namespace App\Domains\Companies\Services;

use App\Domains\Companies\Repositories\CompanyRepository;
use Exception;

class CompanyService
{
    private $repository;

    public function __construct(CompanyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(array $data)
    {
        $this->repository->create($data);
    }

    public function update(array $data, $id)
    {
        return throwException(Exception::class, 'Classe incomplete: ' . get_class($this));
    }
}