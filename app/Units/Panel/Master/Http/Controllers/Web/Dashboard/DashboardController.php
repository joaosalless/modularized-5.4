<?php

namespace App\Units\Panel\Master\Http\Controllers\Web\Dashboard;

use App\Units\Panel\Master\Http\Controllers\Web\Controller;
use App\Units\Panel\Master\Services\Dashboard\DashboardService;

class DashboardController extends Controller
{
    private $dashboardService;

    public function __construct(DashboardService $dashboardService)
    {
        parent::__construct();
        $this->dashboardService = $dashboardService;
    }

    public function index()
    {
        return $this->view('dashboard.index')->with(['entities' => $this->dashboardService->getDashboard()]);
    }
}