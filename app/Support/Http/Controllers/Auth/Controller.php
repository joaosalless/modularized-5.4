<?php

namespace App\Support\Http\Controllers\Auth;

use App\Domains\Companies\Repositories\CompanyRepository;
use App\Domains\Persons\Repositories\PersonRepository;
use App\Support\Http\Controllers\Auth\Traits\HasViewsTrait;
use App\Support\Panels\PanelProperties;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use HasViewsTrait;

    protected $panel;
    protected $userRepository;
    protected $userModel;
    protected $companyRepository;
    protected $personRepository;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->panel             = (new PanelProperties());
        $this->userModel         = $this->panel->makeGuardModel();
        $this->userRepository    = $this->panel->makeGuardModelRepository();
        $this->companyRepository = app()->make(CompanyRepository::class);
        $this->personRepository  = app()->make(PersonRepository::class);

        $this->middleware('guest', ['except' => 'logout']);
    }
}