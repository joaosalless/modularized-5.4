<?php

namespace App\Support\Http\Controllers\Traits;

trait BaseControllerTrait
{

    public function getCurrentUser()
    {
        return currentUser();
    }

    public function logActivity(array $data)
    {
        if (config("laravel-activitylog.enabled")) {
            activity()
                ->causedBy($this->getCurrentUser())
                ->withProperties([
                    'geoip' => config("laravel-activitylog.geoip") ? app('geoip')->getLocation()->toArray() : [],
                ])
                ->log($data["message"]);
        }
    }

}