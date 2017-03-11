<?php

namespace App\Domains\Medias\Database\Factories;

use App\Domains\Medias\Category;
use App\Support\Database\Factory\ModelFactory;
use Illuminate\Support\Str;

class CategoryFactory extends ModelFactory
{
    protected $model = Category::class;

    protected function fields()
    {
        $title = $this->faker->word;

        return [
            'title'       => $title,
            'slug'        => Str::slug($title),
            'intro'       => "{$this->faker->sentence}",
            'body'        => "{$this->faker->sentence}",
            'seo'         => '',
        ];
    }
}