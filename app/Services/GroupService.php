<?php

namespace App\Services;

use App\Repositories\GroupRepository;
use App\Services\AbstractClasses\AbstractService;

class GroupService extends AbstractService
{
    protected $repository = GroupRepository::class;

    public function store($name, $description, $admin_nickname, $img, $directory){
        $group  = $this->repository->store($name, $description, $admin_nickname);
        $this->createDirectory($img, $directory, $group->getId());
        return $group;
    }

    public function createDirectory($url_image, $url_directory, $directoryable_id){
        $directory = new DirectoryService();
        $directory->store($url_image, $url_directory, $directoryable_id, 'App\Models\Group');
    }
}