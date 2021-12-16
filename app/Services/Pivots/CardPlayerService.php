<?php

namespace App\Services\Pivots;

use App\Repositories\Pivots\CardPlayerRepository;
use App\Services\AbstractClasses\AbstractService;

class CardPlayerService extends AbstractService
{
    protected $repository = CardPlayerRepository::class;

    public function store($card_id, $player_id){
        return $this->repository->store($card_id, $player_id);
    }

    public function especific($card_id, $player_id){
        return  $this->repository->especific($card_id, $player_id);
    }

}