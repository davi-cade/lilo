<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Services\AbstractClasses\AbstractService;

class UserService extends AbstractService
{
    protected $repository = UserRepository::class;

    public function store($name, $surname, $email, $birth_date, $password, $img){
        $user  = $this->repository->store($name, $surname, $email, $birth_date, $password, $img);
        return $user;
    }

}