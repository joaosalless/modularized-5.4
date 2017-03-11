<?php

namespace App\Units\Site\Http\Controllers;

use App\Domains\Pages\Repositories\CategoryRepository as PageCategoryRepository;
use App\Domains\Pages\Repositories\PageRepository;
use Illuminate\Http\Request;

class PageController extends Controller
{
    private $request;
    private $pageRepository;
    private $pageCategoryRepository;

    public function __construct(PageRepository $pageRepository,
                                PageCategoryRepository $pageCategoryRepository,
                                Request $request
    )
    {
        parent::__construct();
        $this->request = $request;
        $this->pageRepository = $pageRepository;
        $this->pageCategoryRepository = $pageCategoryRepository;
    }

    public function index()
    {
        $slug = 'home';
        $response = [
            'page' => $this->pageRepository->findBySlug($slug),
        ];
        return $this->view('pages.home.index')->with($response);
    }

    public function quemSomos()
    {
        $slug = 'quem-somos';
        $response = [
            'page' => $this->pageRepository->findBySlug($slug),
        ];
        return $this->view('pages.quem-somos.index')->with($response);
    }

    public function termos()
    {
        $slug = 'termos-servico';
        $response = [
            'page' => $this->pageRepository->findBySlug($slug),
        ];
        return $this->view('pages.quem-somos.index')->with($response);
    }

    public function politicaPrivacidade()
    {
        $slug = 'politica-privacidade';
        $response = [
            'page' => $this->pageRepository->findBySlug($slug),
        ];
        return $this->view('pages.quem-somos.index')->with($response);
    }
}