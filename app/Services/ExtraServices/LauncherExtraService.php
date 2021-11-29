<?php

namespace App\Services\ExtraServices;

use App\Services\ModuleService;
use App\Services\PlayerService;
use App\Services\Pivots\ModulePlayerService;

class LauncherExtraService
{
    protected $moduleService;
    protected $playerService;
    protected $modulePlayerService;

    public function  __construct(ModuleService $moduleService, PlayerService $playerService, ModulePlayerService $modulePlayerService){
        $this->moduleService = $moduleService;
        $this->playerService = $playerService;
        $this->modulePlayerService = $modulePlayerService;
    }

    public function launch($nickname, $user_id){
        $player = $this->playerService->store($nickname, $user_id);
        $this->moduleStarter($player->getNickname());
    }

    public function moduleStarter($nickname){
        $modules = $this->moduleService->getAll();
        foreach ($modules as $key){
            $this->modulePlayerService->store($nickname, $key->getId(), 0);
        }
    }

}