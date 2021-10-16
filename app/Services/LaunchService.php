<?php

namespace App\Services;
use App\Models\Pivots\ModuleUser;
use App\Services\ModuleService;
use App\Services\PlayerService;

class LaunchService
{
    protected $moduleService;
    protected $playerService;

    public function  __construct(ModuleService $moduleService, PlayerService $playertService){
        $this->moduleService = $moduleService;
        $this->playerService = $playertService;
    }

    public function launch($nickname, $id){
        $player = $this->playerService->store($nickname, $id);
        $this->modulesStarter($player->getId());
    }

    public function modulesStarter($id){
        $allModule = $this->moduleService->getAll();
        foreach ($allModule as $key){
            $user = ModuleUser::create([
                'user_id' => $id,
                'module_id' => $key->getId(),
                'total_assimilated_card' => 0,
                'total_available_card' => 9,
            ]);
        }
    }

}