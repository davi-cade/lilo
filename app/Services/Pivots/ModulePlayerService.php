<?php

namespace App\Services\Pivots;

use App\Repositories\Pivots\ModulePlayerRepository;
use App\Services\AbstractClasses\AbstractService;

class ModulePlayerService extends AbstractService
{
    protected $repository = ModulePlayerRepository::class;

    public function store($player_id, $module_id){
        return $this->repository->store($player_id, $module_id);
    }

}