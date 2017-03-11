<?php

namespace App\Units\Panel\Master\Http\Controllers\Web\Users\Customer;

use App\Domains\Users\Customer\Repositories\UserRepository;
use App\Units\Panel\Master\Http\Controllers\Web\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
    protected $entity;
    protected $repository;


    public function __construct(UserRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->entity     = $repository->makeModel();
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
            'profile',
        ];
    }


    public function formatData(array $data) : array
    {
        if ($data['profile_type'] === 'App\Domains\Companies\Company') {
            $data['profile']['data_fundacao'] = Carbon::createFromFormat('d/m/Y', $data['profile']['data_fundacao']);
        }

        if ($data['profile_type'] === 'App\Domains\Persons\Person') {
            $data['profile']['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $data['profile']['data_nascimento']);
        }

        return $data;
    }

    public function update(Request $request, $id)
    {
        $data   = $this->formatData($request->all());
        $entity = $this->repository->find($id);
        $rules  = $entity->rules()->updating();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            alert()->error($validator->getMessageBag());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $entity = $this->repository->update($data, $id);
        $entity->profile()->update($data['profile']);

        $this->addMedias($entity);

        return $this->crudResponse($entity, 'updated');
    }
}