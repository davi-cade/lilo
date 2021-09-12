<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use App\Repositories\ModuleRepository;
use App\Repositories\TaskRepository;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    protected $module;
    protected $task;

    public function  __construct(ModuleRepository $moduletModel, TaskRepository $tasktModel){
        $this->module = $moduletModel;
        $this->task = $tasktModel;
    }

    public function index(){
        $modules =  $this->module->getAll();
        $totalNumberModules =  $this->module->count();
        return view('administrator.dashboard', compact('modules', 'totalNumberModules'));
    }
}
