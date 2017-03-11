<?php

namespace App\Units\Panel\Master\Services\Dashboard;

use App\Domains\Contacts\Repositories\ContactRepository as ContactFormRepository;
use App\Domains\Contacts\Repositories\MessageRepository as ContactMessageRepository;
use App\Domains\Medias\Repositories\CategoryRepository as MediaCategoryRepository;
use App\Domains\Medias\Repositories\MediaRepository;
use App\Domains\Pages\Repositories\CategoryRepository as PageCategoryRepository;
use App\Domains\Pages\Repositories\PageRepository;
use App\Domains\Users\Customer\Repositories\UserRepository as UserCustomerRepository;
use App\Domains\Users\Master\Repositories\UserRepository as UserMasterRepository;

class DashboardService
{
    protected $mediaCategoryRepository;

    protected $pageCategoryRepository;

    protected $orderItemRepository;

    protected $perpage = 1;

    protected $pageRepository;

    protected $mediaRepository;

    protected $userMasterRepository;

    protected $userCustomerRepository;

    protected $ingressoRepository;

    protected $IngressoCategoriaRepository;

    protected $couponRepository;

    protected $orderRepository;

    protected $contactFormRepository;


    public function __construct()
    {
        $this->pageCategoryRepository = app()->make(PageCategoryRepository::class);
        $this->pageRepository = app()->make(PageRepository::class);
        $this->mediaCategoryRepository = app()->make(MediaCategoryRepository::class);
        $this->mediaRepository = app()->make(MediaRepository::class);
        $this->userMasterRepository = app()->make(UserMasterRepository::class);
        $this->userCustomerRepository = app()->make(UserCustomerRepository::class);
        $this->contactFormRepository = app()->make(ContactFormRepository::class);
        $this->contactMessageRepository = app()->make(ContactMessageRepository::class);
    }


    protected function setRepositories()
    {
        return [
            ['repo' => 'pageCategoryRepository', 'widgetBox'  => true, 'order' => 1],
            ['repo' => 'pageRepository', 'widgetBox'  => true, 'order' => 1],
            ['repo' => 'mediaCategoryRepository', 'widgetBox'  => true, 'order' => 1],
            ['repo' => 'mediaRepository', 'widgetBox'  => true, 'order' => 1],
            ['repo' => 'userMasterRepository', 'widgetBox'  => true, 'order' => 1],
            ['repo' => 'userCustomerRepository', 'widgetBox'  => true, 'order' => 1],
            ['repo' => 'contactFormRepository', 'widgetBox'  => true, 'order' => 1],
            ['repo' => 'contactMessageRepository', 'widgetBox'  => true, 'order' => 1],
        ];
    }


    public function getDashboard()
    {
        $entities = collect([]);

        collect($this->setRepositories())->map(function ($item, $key) use ($entities) {
            if ( $this->{$item['repo']} ) {
                $entities->push([
                    'model'      => $this->{$item['repo']}->makeModel(),
                    'pagination' => $this->{$item['repo']}->paginate($this->perpage),
                    'widgetBox'  => $item['widgetBox'],
                ]);
            }
        });

        return $entities->sortBy('index');
    }
}