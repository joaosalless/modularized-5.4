<?php

namespace App\Units\Panel\Master\Http\Controllers\Web\Profile;

use App\Domains\Users\Master\Repositories\UserRepository;
use App\Support\Http\Controllers\Traits\UserProfileTrait;
use App\Units\Panel\Master\Http\Controllers\Web\Controller;
use Carbon\Carbon;

class UserProfileController extends Controller
{
    use UserProfileTrait;

    protected $repository;

    public function __construct(UserRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    public function getEntity($id = null) : array
    {
        $response = [
            'entity'       => $this->getCurrentUser(),
            'actionRoutes' => $this->getActionButtons(),
        ];

        return $response;
    }


    public function getEntityRelations() : array
    {
        return [
            'profile',
        ];
    }


    public function formatData(array $data) : array
    {
        if ($this->getCurrentUser()->isCompany()) {
            $data['profile']['data_fundacao'] = $data['profile']['data_fundacao']
                ? Carbon::createFromFormat('d/m/Y', $data['profile']['data_fundacao'])
                : null;
        }

        if ($this->getCurrentUser()->isPerson()) {
            $data['profile']['data_nascimento'] = $data['profile']['data_nascimento']
                ? Carbon::createFromFormat('d/m/Y', $data['profile']['data_nascimento'])
                : null;
        }

        return $data;
    }

}