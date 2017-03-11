<?php

namespace App\Domains\Abstracts\Categories\Rules;

use App\Domains\Abstracts\Categories\Category;
use App\Support\Rules\Rules;

abstract class CategoryRules extends Rules
{
    protected $entity = Category::class;

    public function defaultRules()
    {
        return [
            'title' => 'required',
        ];
    }

    public function creating($callback = null)
    {
        return $this->returnRules([
            'slug' => 'required',
        ], $callback);
    }

    public function updating($callback = null)
    {
        return $this->returnRules([

        ], $callback);
    }
}