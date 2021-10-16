<?php

namespace App\Services;
use App\Repositories\PlayerRepository;

class PlayerService
{
    protected $repository;
  
    public function  __construct(PlayerRepository $playerRepository){
        $this->repository = $playerRepository;
    }

    //ORM Function

    public function getAll(){
        return $this->repository->getAll();
    }

    public function getById($id){
        return $this->repository->getById($id);
    }

    public function getByAllField($field, $value){
        return $this->repository->getByField($field, $value);
    }

    public function getByField($field, $value){
        return $this->repository->getByField($field, $value)->first();
    }

    public function getFirstByField($field, $value){
        return $this->repository->getFirstByField($field, $value)->toArray();
    }
    
    //CRUD

    public function store($nickname, $id){
        return $this->repository->store($nickname, $id);
    }

}