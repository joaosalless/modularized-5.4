<?php

namespace App\Units\Panel\Customer\Http\Controllers\Web\Dashboard;

use App\Units\Panel\Customer\Http\Controllers\Web\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return $this->view('dashboard.index');
    }
}