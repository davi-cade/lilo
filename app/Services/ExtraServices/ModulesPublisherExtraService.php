<?php

namespace App\Services\ExtraServices;

use App\Services\PlayerService;
use App\Services\Pivots\ModulePlayerService;

class ModulesPublisherExtraService
{
    public function publish($module_id){

        $playerService = new PlayerService();
        $modulePlayerService = new ModulePlayerService();

        $players = $playerService->getAll();
        
        foreach ($players as $key){
            $modulePlayerService->store($key->getNickname(), $module_id, 0);
        }
    }

}