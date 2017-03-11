<?php

namespace App\Domains\Pages\Rules;

use App\Domains\Pages\Page;
use App\Support\Rules\Rules;

class PageRules extends Rules
{
    protected $entity = Page::class;

    public function defaultRules()
    {
        return [
            'title'  => 'required',
            'intro'  => 'required',
            'body'   => 'required',
        ];
    }

    public function creating($callback = null)
    {
        return $this->returnRules([
            'category_id'    => 'required',
            'slug'           => 'required',
        ], $callback);
    }

    public function updating($callback = null)
    {
        return $this->returnRules([

        ], $callback);
    }
}