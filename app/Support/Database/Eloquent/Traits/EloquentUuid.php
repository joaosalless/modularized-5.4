<?php

namespace App\Support\Database\Eloquent\Traits;

use Ramsey\Uuid\Uuid;

trait EloquentUuid
{
    public function getIncrementing()
    {
        return false;
    }

    public static function bootEloquentUuid()
    {
        static::creating(function ($model) {
            $model->incrementing = false;
            $model->attributes[$model->getKeyName()] = Uuid::Uuid4()->toString();
        }, 0);
    }
}