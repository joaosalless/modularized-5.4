<?php

namespace App\Support\Http\Controllers\Traits;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;

trait UserProfileTrait
{
    public function showProfile()
    {
        return $this->view("profile.show")->with($this->getEntity());
    }


    public function editProfile()
    {
        return $this->view("profile.edit")->with($this->getEntity($this->getCurrentUser()->id));
    }


    public function updateProfile(Request $request)
    {
        $data   = $this->formatData($request->all());
        $entity = $this->getCurrentUser();
        $rules  = $entity->rules()->updating();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            alert()->error($validator->getMessageBag());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $entity = $this->repository->update($data, $this->getCurrentUser()->id);
        $entity->profile()->update($data['profile']);

        $this->addMedias($entity);

        $response = [
            'message' => trans("{$entity->getEntityDomainAlias()}::{$entity->getEntityTranslationKey()}.profile_updated", ['model' => $entity->getEntityShortName()]),
            'data'    => $entity->toArray(),
        ];

        if (request()->wantsJson()) {
            return response()->json($response);
        }

        alert()->success($response['message']);

        if (request()->get('redirect_url')) {
            return redirect(request()->get('redirect_url'));
        }

        return redirect()->route("{$this->panel->routeAlias()}.profile.show")->with([
            'tab_active' => 'cadastro',
        ]);
    }


    public function updatePassword(Request $request)
    {
        $data = $request->only([
            'password',
            'password_confirmation',
        ]);

        $entity = $this->getCurrentUser();
        $rules  = $entity->rules()->updatingPassword();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            alert()->error($validator->getMessageBag());
            return redirect()->back()->withErrors($validator)->withInput()->with([
                'tab_active' => 'update_password',
            ]);
        }

        $entity->password = bcrypt($data['password']);
        $entity->password_updated_at = Carbon::now();
        $entity->save();

        $response = [
            'message' => 'update_password',
            'data'    => $entity->toArray(),
        ];

        if ($request->wantsJson()) {
            return response()->json($response);
        }

        $this->logActivity($response);
        alert()->success($response['message']);

        return redirect()->route("{$this->panel->routeAlias()}.profile.show")->with([
            'tab_active' => 'cadastro',
        ]);
    }
}