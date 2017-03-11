<?php

namespace App\Domains\Pages\Database\Factories;

use App\Domains\Pages\Page;
use App\Support\Database\Factory\ModelFactory;
use Illuminate\Support\Str;

class PageFactory extends ModelFactory
{
    protected $model = Page::class;

    protected function fields()
    {
        $title = $this->faker->word;

        return [
            'category_id' => null,
            'title'       => $title,
            'slug'        => Str::slug($title),
            'intro'       => "{$this->faker->sentence}",
            'body'        => "{$this->faker->sentence}",
        ];
    }
}