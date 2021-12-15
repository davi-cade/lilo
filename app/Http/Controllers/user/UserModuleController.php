<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Services\ModuleService;

class UserModuleController extends Controller
{
    public function __invoke($slug)
    {
        $service = new ModuleService();
        $module = $service->getBySlug($slug);
        return view('User.Module.show', compact('module'));
    }
}