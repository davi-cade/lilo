<?php

namespace App\Http\Controllers\User\ModuleUserController;

use Illuminate\Http\Request;
use App\Repositories\ModuleRepository;


class ModuleUserController extends Controller
{

    protected $module;

    public function __construct(ModuleRepository $model)
    {
        $this->module = $model;
    }

    public function index(){
        $modules = $this->module->all();
        return view('modules.index', compact('modules'));
    }
}
