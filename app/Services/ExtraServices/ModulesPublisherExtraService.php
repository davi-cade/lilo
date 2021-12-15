<?php

namespace App\Services\ExtraServices;

use App\Services\PlayerService;
use App\Services\Pivots\ModulePlayerService;
use App\Services\Pivots\CardPlayerService;

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

    public function publishCard($card_id){
        $cardPlayerService = new CardPlayerService();
        $players = $this->playerService->getAll();
        foreach ($players as $key){
            $cardPlayerService->store($card_id, $key->getId());
        }
    }

}