<?php

namespace App\Support\Database\Eloquent\Traits;

use App\Support\Database\Eloquent\Contracts\ModelContract;
use App\Support\Rules\Exceptions\RulesNotDefined;
use App\Support\Rules\Contracts\Rules;

trait HasRules
{
    /**
     * @param ModelContract $entity
     *
     * @return Rules
     */
    public function rules(ModelContract $entity = null)
    {
        $className = $this->rulesFrom;
        $entity    = $entity ?? $this;

        if (class_exists($className)) {
            return (new $className($entity));
        }

        throw new RulesNotDefined("Rules class {$className} do not exists.");
    }
}
