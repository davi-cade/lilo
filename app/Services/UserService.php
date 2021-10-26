<?php

namespace App\Services;
use App\Services\LaunchService;
use App\Repositories\UserRepository;

class UserService
{
    protected $repository;
  
    public function  __construct(UserRepository $userRepository){
        $this->repository = $userRepository;
    }

    //ORM Function

    public function getAll(){
        return $this->repository->getAll();
    }
    
    //CRUD

    public function store($name, $surname, $email, $birth_date, $password, $img){
        $user  = $this->repository->store($name, $surname, $email, $birth_date, $password, $img);
        return $user;
    }

}