<?php

namespace App\Domains\Medias\Database\Seeders;

use App\Domains\Medias\Category;
use App\Units\Dev\Helpers\EntityHelper;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $entities = (new EntityHelper())->getEntities($structure = false);

        foreach ($entities as $entity) {
            factory(Category::class)->create([
                'title' => $entity['entityName'],
                'slug'  => $entity['mediaCategorySlug'],
            ]);
        }
    }
}