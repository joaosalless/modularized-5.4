<?php

namespace App\Domains\Pages\Rules;

use App\Domains\Pages\Category;
use App\Domains\Abstracts\Categories\Rules\CategoryRules as AbstractCategoryRules;

class CategoryRules extends AbstractCategoryRules
{
    protected $entity = Category::class;

    public function defaultRules()
    {
        return [
            'title' => 'required',
            'slug'  => 'required',
        ];
    }


    public function creating($callback = null): array
    {
        return $this->returnRules(array_merge(
            [

            ], parent::creating()
        ), $callback);
    }


    public function updating($callback = null): array
    {
        return $this->returnRules(array_merge(
            [

            ], parent::creating()
        ), $callback);
    }

}