<?php

namespace App\Services\ExtraServices;

use App\Services\PlayerService;
use App\Services\Pivots\ModulePlayerService;

class ModulesPublisherExtraService
{
    protected $playerService;

    public function __construct(){
        $this->playerService = new PlayerService();
    }
    
    public function publishModule($module_id){
        $modulePlayerService = new ModulePlayerService();
        $players = $this->playerService->getAll();
        foreach ($players as $key){
            $modulePlayerService->store($key->getId(), $module_id);
        }
    }

}