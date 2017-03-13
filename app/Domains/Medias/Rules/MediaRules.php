<?php

namespace App\Domains\Medias\Rules;

use App\Domains\Medias\Media;
use App\Support\Rules\Rules;

/**
 * Class MediaRules
 * @package  App\Domains\Medias
 */
class MediaRules extends Rules
{
    protected $entity = Media::class;

    public function defaultRules()
    {
        return [
            'title'       => 'required',
            'description' => 'required',
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