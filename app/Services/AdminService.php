<?php

namespace App\Services;

use App\Repositories\AdminRepository;
use App\Services\AbstractClasses\AbstractService;

class AdminService extends AbstractService
{
    protected $repository = AdminRepository::class;
    
    public function store($name, $surname, $email, $birth_date, $password){
        return $this->repository->store($name, $surname, $email, $birth_date, $password);
    }
    
}