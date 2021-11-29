<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use App\Services\ModuleService;
use App\Services\PlayerService;
use App\Services\AdminService;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    protected $moduleService;
    protected $playerService;
    protected $adminService;

    public function  __construct(ModuleService $moduleService, PlayerService $playerService, AdminService $adminService){
        $this->moduleService = $moduleService;
        $this->playerService = $playerService;
        $this->adminService = $adminService;
    }

    public function index(){
        $modules =  $this->moduleService->getAll();
        $player =  $this->playerService->getAll();
        
        $totalModules = $this->moduleService->count();
        $totalPlayer =  $this->playerService->count();
        $totalAdmins = $this->adminService->count();

        return view('administrator.dashboard', compact('modules', 'player', 'totalModules', 'totalPlayer', 'totalAdmins'));
    }
}
