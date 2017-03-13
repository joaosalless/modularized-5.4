<?php

namespace App\Domains\Pages\Rules;

use App\Support\Rules\Rules;
use App\Domains\Pages\Page;

/**
 * Class PageRules
 * @package  App\Domains\Pages
 */
class PageRules extends Rules
{
    protected $entity = Page::class;

    public function defaultRules()
    {
        return [
            'category_id' => 'required',
            'title'       => 'required',
            'slug'        => 'required',
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