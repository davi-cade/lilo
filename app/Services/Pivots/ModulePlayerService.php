<?php

namespace App\Services\Pivots;

use App\Repositories\Pivots\ModulePlayerRepository;
use App\Services\AbstractClasses\AbstractService;

class ModulePlayerService extends AbstractService
{
    protected $repository = ModulePlayerRepository::class;

    public function store($player_nickname, $module_id, $total_available_card){
        return $this->repository->store($player_nickname, $module_id, $total_available_card);
    }

}