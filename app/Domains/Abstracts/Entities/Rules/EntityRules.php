<?php

namespace App\Domains\Abstracts\Entities\Rules;

use App\Support\Rules\Rules;
use App\Domains\Abstracts\Entities\Entity;

abstract class EntityRules extends Rules
{
    protected $entity = Entity::class;

    public function defaultRules()
    {
        return [

        ];
    }

    public function creating($callback = null)
    {
        return $this->returnRules([

        ], $callback);
    }

    public function updating($callback = null)
    {
        return $this->returnRules([

        ], $callback);
    }
}