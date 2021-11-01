<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use App\Services\ModuleService;
use App\Services\PlayerService;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    protected $moduleService;
    protected $playerService;

    public function  __construct(ModuleService $moduleService, PlayerService $playerService){
        $this->moduleService = $moduleService;
        $this->playerService = $playerService;
    }

    public function index(){
        $modules =  $this->moduleService->getAll();
        $player =  $this->playerService->getAll();

        $totalModules =  $this->moduleService->count();
        $totalPlayer =  $this->playerService->count();

        return view('administrator.dashboard', compact('modules', 'player', 'totalModules', 'totalPlayer'));
    }
}
