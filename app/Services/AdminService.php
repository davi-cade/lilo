<?php

namespace App\Services;
use App\Repositories\AdminRepository;

class AdminService
{
    protected $repository;

    public function  __construct(AdminRepository $adminRepository){
        $this->repository = $adminRepository;
    }
    
    //CRUD

    public function store($name, $email, $password){
        return $this->repository->store($name, $email, $password);
    }
    
}