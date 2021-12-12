<?php

namespace App\Repositories\Pivots;

use App\Models\Pivots\GroupPlayer;
use App\Repositories\AbstractClasses\AbstractRepository;

class GroupPlayerRepository extends AbstractRepository
{
    protected $model = GroupPlayer::class;

    public function store($player_nickname, $group_id){
        GroupPlayer::create([
            'player_nickname' => $player_nickname,
            'group_id' => $group_id
        ]);
    }

    
}