<?php

namespace App\Services\Pivots;

use App\Repositories\Pivots\GroupPlayerRepository;
use App\Services\AbstractClasses\AbstractService;

class GroupPlayerService extends AbstractService
{
    protected $repository = GroupPlayerRepository::class;

    public function store($player_id, $group_id){
        return $this->repository->store($player_id, $group_id);
    }

}