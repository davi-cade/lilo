<?php

namespace App\Services\ExtraServices;

use App\Services\ModuleService;
use App\Services\PlayerService;
use App\Services\GroupService;
use App\Services\Pivots\ModulePlayerService;
use App\Services\Pivots\CardPlayerService;

class LauncherExtraService
{
    protected $moduleService;
    protected $playerService;
    protected $cardService;
    protected $modulePlayerService;
    protected $cardPlayerService;

    public function  __construct(ModuleService $moduleService, PlayerService $playerService, ModulePlayerService $modulePlayerService){
        $this->moduleService = $moduleService;
        $this->playerService = $playerService;
        $this->cardService = new GroupService();
        $this->modulePlayerService = $modulePlayerService;
        $this->cardPlayerService = new CardPlayerService();
    }

    public function launch($id, $user_id){
        $player = $this->playerService->store($id, $user_id);
        $this->moduleStarter($player->getId());
        $this->cardStarter($player->getId());
    }

    public function moduleStarter($id){
        $modules = $this->moduleService->getAll();
        foreach ($modules as $key){
            $this->modulePlayerService->store($id, $key->getId());
        }
    }

    public function cardStarter($id){
        $cards = $this->cardService->getAll();
        foreach ($cards as $key){
            $this->cardPlayerService->store($id, $key->getId());
        }
    }

}