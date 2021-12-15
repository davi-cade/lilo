<?php

namespace App\Repositories\Pivots;

use App\Models\Pivots\ModulePlayer;
use App\Repositories\AbstractClasses\AbstractRepository;

class ModulePlayerRepository extends AbstractRepository
{
    protected $model = ModulePlayer::class;

    public function store($player_id, $module_id){
        ModulePlayer::create([
            'total_assimilated_card' => 0,
            'player_id' => $player_id,
            'module_id' => $module_id
        ]);
    }

    
}