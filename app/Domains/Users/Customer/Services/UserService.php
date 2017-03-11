<?php

namespace App\Domains\Users\Customer\Services;

use App\Domains\Users\Customer\User;
use App\Domains\Users\Customer\Person;
use App\Domains\Users\Customer\Company;
use App\Domains\Users\Customer\Repositories\UserRepository;

class UserService
{
    private $clientRepository;
    private $userRepository;
    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }
    public function create(array $data)
    {
        $data['password'] = bcrypt($data['password']);
        $user = $this->userRepository->create($data);

        $this->clientRepository->create($data['client']);
    }
    public function update(array $data, $id)
    {
        if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }
        $user = $this->userRepository->find($id);
        $this->userRepository->update($data, $id);
        $client = $this->clientRepository->findByField('user_id', $id)->first();
        if (is_null($client)) {
            $data['client']['user_id'] = $user->id;
            $client = $this->clientRepository->create($data['client']);
        }
        $this->clientRepository->update($data['client'], $client->id);
        return $user;
    }
}