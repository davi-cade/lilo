<?php

namespace App\Services;
use App\Repositories\GroupRepository;

class GroupService
{
    protected $repository;

    public function  __construct(GroupRepository $groupRepository){
        $this->repository = $groupRepository;
    }

    //ORM Function

    public function getAll(){
        return $this->repository->getAll();
    }

    public function getAllByField($field, $value){
        return $this->repository->getByField($field, $value);
    }

}