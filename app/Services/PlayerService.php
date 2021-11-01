<?php

namespace App\Services;

use App\Repositories\PlayerRepository;
use App\Services\AbstractClasses\AbstractService;

class PlayerService extends AbstractService
{
    protected $repository = PlayerRepository::class;
  
    public function store($nickname, $id){
        return $this->repository->store($nickname, $id);
    }

}