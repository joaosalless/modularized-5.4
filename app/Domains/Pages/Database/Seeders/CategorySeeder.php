<?php

namespace App\Domains\Pages\Database\Seeders;

use App\Domains\Pages\Category;
use App\Domains\Pages\Page;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'title' => 'Público',
                'slug'  => 'public',
                'intro' => 'Páginas Públicas do Site',
                'pages' => [
                    [
                        'title' => 'Home',
                        'slug'  => 'home',
                        'intro' => 'Em construção',
                    ],
                    [
                        'title' => 'Quem Somos',
                        'slug'  => 'quem-somos',
                        'intro' => 'Em construção',
                    ],
                    [
                        'title' => 'Termos de Serviço',
                        'slug'  => 'termos-servico',
                        'intro' => 'Em construção',
                    ],
                    [
                        'title' => 'Política de Privacidade',
                        'slug'  => 'politica-privacidade',
                        'intro' => 'Em construção',
                    ],
                    [
                        'title' => 'Contato',
                        'slug'  => 'contato',
                        'intro' => 'Em construção',
                    ],
                    [
                        'title' => 'Ingressos',
                        'slug'  => 'ingressos',
                        'intro' => 'Em construção',
                    ],
                ],
            ],
            [
                'title' => 'Painel de Parceiros',
                'slug'  => 'partner',
                'intro' => 'Páginas da Área de Parceiros',
            ],
            [
                'title' => 'Painel de Clientes',
                'slug'  => 'customer',
                'intro' => 'Páginas da Área de Clientes',
            ],
        ];

        foreach ($categories as $category) {
            factory(Category::class, 1)->create([
                'title' => $category['title'],
                'slug'  => $category['slug'],
                'intro' => $category['intro'],
            ])->each(function ($c) use ($category) {
                if (isset($category['pages'])) {
                    foreach ($category['pages'] as $page) {
                        factory(Page::class)->create([
                            'category_id' => $c->id,
                            'title'       => $page['title'],
                            'slug'        => $page['slug'],
                            'intro'       => $page['intro'],
                        ]);
                    }
                }
            });
        }
    }
}