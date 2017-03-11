<?php

namespace App\Units\Auth\Http\Controllers;

use App\Domains\Users\Master\Repositories\UserRepository;
use App\Support\Http\Controllers\Auth\RegisterController as Controller;
use App\Support\Panels\PanelProperties;

class RegisterController extends Controller
{
    protected $panel;
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->panel = new PanelProperties();
        $this->userRepository = $userRepository;
        parent::__construct();
    }
}
