<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CardService;
use App\Services\ModuleService;


class CarroselController extends Controller
{
    public function __invoke($slug, $num)
    {
        $moduleService = new ModuleService();
        $service = new CardService();

        $module = $moduleService->getBySlug($slug);
        $cards = $service->getCards($module->getId(), $num);
        return view('Pre-Atividade.atividade', compact('cards', 'slug', 'num'));
    }
}
