<?php

namespace App\Units\Dev\Http\Controllers\Web\Dashboard;

use Illuminate\View\View;
use App\Units\Dev\Http\Controllers\Web\Controller;

class DashboardController extends Controller
{
    public function index(): View
    {
        return $this->view('dashboard.index');
    }
}