<?php

namespace App\Domains\Abstracts\Users\Services;

use App\Domains\Companies\Repositories\CompanyRepository;
use App\Domains\Persons\Repositories\PersonRepository;
use App\Support\Database\Eloquent\Contracts\UserContract;

abstract class AbstractUserService
{
    private $companyRepository;
    private $personRepository;

    /**
     * UserService constructor.
     *
     * @param CompanyRepository $companyRepository
     * @param PersonRepository $personRepository
     */
    public function __construct(CompanyRepository $companyRepository,
                                PersonRepository $personRepository)
    {
        $this->companyRepository = $companyRepository;
        $this->personRepository  = $personRepository;
        $this->userRepository    = app()->make($this->getUserRepository());
    }

    /**
     * Set the User Repository Class
     *
     * @return string
     */
    protected abstract function getUserRepository() : string;

    /**
     * Create User
     *
     * @param array $data
     * @return UserContract
     */
    public function create(array $data) : UserContract
    {

    }

    /**
     * Update User
     *
     * @param $id
     * @param array $data
     * @return UserContract
     */
    public function update($id, array $data) : UserContract
    {

    }
}