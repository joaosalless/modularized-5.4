<?php

namespace App\Units\Dev\Http\Controllers\Web\Profile;

use App\Units\Dev\Http\Controllers\Web\Controller;
use Carbon\Carbon;
use Illuminate\View\View;

class UserProfileController extends Controller
{
//    public function showProfile(): View
//    {
//        $entities = $this->getEntities($structure = false);
//
//        return $this->view('profile.show')->with([
//
//        ]);
//    }


    public function getEntity($id = null): array
    {
        $response = [
            'entity'       => $this->getCurrentUser(),
            'entities'     => collect($entities),
            'actionRoutes' => $this->getActionButtons(),
        ];

        return $response;
    }


    public function getEntityRelations(): array
    {
        return [
            'profile',
        ];
    }


    public function formatData(array $data): array
    {
        if ($this->getCurrentUser()->isCompany()) {
            $data['profile']['data_fundacao'] = Carbon::createFromFormat('d/m/Y', $data['profile']['data_fundacao']);
        }

        if ($this->getCurrentUser()->isPerson()) {
            $data['profile']['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $data['profile']['data_nascimento']);
        }

        return $data;
    }

}