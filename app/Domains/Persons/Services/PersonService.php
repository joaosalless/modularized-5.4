<?php

namespace App\Domains\Persons\Services;

use App\Domains\Persons\Repositories\PersonRepository;
use Exception;

class PersonService
{
    private $repository;

    public function __construct(PersonRepository $repository)
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