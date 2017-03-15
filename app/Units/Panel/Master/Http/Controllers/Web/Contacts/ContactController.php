<?php

namespace App\Units\Panel\Master\Http\Controllers\Web\Contacts;

use App\Domains\Contacts\Repositories\ContactRepository;
use App\Units\Panel\Master\Http\Controllers\Web\Controller;

class ContactController extends Controller
{
    protected $repository;

    /**
     * ContactController constructor.
     *
     * @param ContactRepository $repository
     */
    public function __construct(ContactRepository $repository)
    {
        parent::__construct($repository);
    }

    /**
     * Get Entity Relations
     *
     * Specify the entity relationships to be loaded
     *
     * @return array
     */
    public function getEntityRelations(): array
    {
        return [
            'messages'
        ];
    }
}