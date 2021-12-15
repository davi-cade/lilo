<?php

namespace App\Repositories\Pivots;

use App\Models\Pivots\CardPlayer;
use App\Repositories\AbstractClasses\AbstractRepository;

class CardPlayerRepository extends AbstractRepository
{
    protected $model = CardPlayer::class;

    public function store($card_id, $player_id){
        CardPlayer::create([
            'card_id' => $card_id,
            'player_id' => $player_id
        ]);
    }

    
}