<?php

namespace App\Repositories\Pivots;

use App\Models\Pivots\GroupPlayer;
use App\Repositories\AbstractClasses\AbstractRepository;

class GroupPlayerRepository extends AbstractRepository
{
    protected $model = GroupPlayer::class;

    public function store($player_id, $group_id){
        GroupPlayer::create([
            'player_id' => $player_id,
            'group_id' => $group_id
        ]);
    }

    
}