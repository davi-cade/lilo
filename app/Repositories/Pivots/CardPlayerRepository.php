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

    public function especific($card_id, $player_id){
        return $this->model::where('card_id', $card_id)->where('player_id', $player_id)->first();
    }
    
}