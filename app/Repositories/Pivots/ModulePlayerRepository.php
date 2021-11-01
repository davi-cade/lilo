<?php

namespace App\Repositories\Pivots;

use App\Models\Pivots\ModulePlayer;
use App\Repositories\AbstractClasses\AbstractRepository;

class ModulePlayerRepository extends AbstractRepository
{
    protected $model = ModulePlayer::class;

    public function store($player_nickname, $module_id, $total_available_card){
        ModulePlayer::create([
            'player_nickname' => $player_nickname,
            'module_id' => $module_id,
            'total_assimilated_card' => 0,
            'total_available_card' => $total_available_card,
        ]);
    }

    
}