<?php

namespace App\Services;

use App\Repositories\GroupRepository;
use App\Services\ChatService;
use App\Services\AbstractClasses\AbstractService;

class GroupService extends AbstractService
{
    protected $repository = GroupRepository::class;

    public function store($name, $description, $admin_nickname, $img, $directory){
        $group  = $this->repository->store($name, $description, $admin_nickname);
        $this->createDirectory($img, $directory, $group->getId());
        $this->createChat($group->getId(), $group->getName());
        return $group;
    }

    public function createChat($group_id, $title){
        $chat = new ChatService();
        $chat->store($group_id, $title);
    }

    public function createDirectory($url_image, $url_directory, $directoryable_id){
        $directory = new DirectoryService();
        $directory->store($url_image, $url_directory, $directoryable_id, 'App\Models\Group');
    }
}