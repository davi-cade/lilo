<?php

namespace App\Services\ExtraServices;

use app\Services\PlayerService;

class RegenerateChanceExtraService
{
    protected $service;

    public function __construct(PlayerService $playerService){
        $this->service = $playerService;
    }

    public function regenerate(){

        $allPlayer = $this->service->getAll();
        foreach ($allPlayer as $key) {
            $key->chances+=1;
        }
    }
}