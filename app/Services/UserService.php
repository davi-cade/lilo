<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Services\AbstractClasses\AbstractService;

use App\Services\DirectoryService;

class UserService extends AbstractService
{
    protected $repository = UserRepository::class;

    public function store($name, $surname, $email, $birth_date, $password, $img, $directory){
        $user  = $this->repository->store($name, $surname, $email, $birth_date, $password);
        $this->createDirectory($img, $directory, $user->getId());
        return $user;
    }

    public function createDirectory($url_avatar, $url_directory, $directoryable_id){
        $directory = new DirectoryService();
        $directory->store($url_avatar, $url_directory, $directoryable_id, 'App\Models\User');
    }

    public function getRegisteById($id){
        return $this->repository->getById($id)->toArray();
    }

}