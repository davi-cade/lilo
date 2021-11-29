<?php

namespace App\Services;

use App\Repositories\AdminRepository;
use App\Services\AbstractClasses\AbstractService;

class AdminService extends AbstractService
{
    protected $repository = AdminRepository::class;
    
    public function store($name, $surname, $email, $birth_date, $password, $img, $directory){
        $admin = $this->repository->store($name, $surname, $email, $birth_date, $password);
        $this->createDirectory($img, $directory, $admin->getId());
        return $admin;
    }

    public function destroy($id){
        try{
            $this->repository->getById($id);
        }catch (Exception $e) {
            return 'NÃO FOI POSSIVÉL ENCONTRAR ESSE ADMINISTRADOR.';
        }
        $this->repository->destroy($id);
        return 'O ADMINISTRADOR FOI DELETADO COM SUCESSO.';
    }

    public function riseToSuperadministrator($id){
        $admin = $this->repository->getById($id);
        $admin->detachRole(2);
        $admin->attachRole(1);
    }
    
    public function createDirectory($url_avatar, $url_directory, $directoryable_id){
        $directory = new DirectoryService();
        $directory->store($url_avatar, $url_directory, $directoryable_id, 'App\Models\User');
    }
    
}