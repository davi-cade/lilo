<?php

namespace App\Services;

use App\Repositories\GroupRepository;
use App\Services\ChatService;
use App\Services\AbstractClasses\AbstractService;

class GroupService extends AbstractService
{
    protected $repository = GroupRepository::class;

    public function store($name, $description, $admin_id, $img, $directory){
        $group  = $this->repository->store($name, $description, $admin_id);
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

    public function destroy($id){
        try{
            $this->repository->getById($id);
        }catch (Exception $e) {
            return 'NÃO FOI POSSIVÉL ENCONTRAR ESSE GRUPO.';
        }

        $this->destroyDirectory($id);
        $this->destroyChat($id);

        $this->repository->destroy($id);
        return 'O GRUPO FOI DELETADO COM SUCESSO.';
    }

    public function destroyDirectory($id){
        $directory = new DirectoryService();
        $directory->destroy($id);
    }

    public function destroyChat($id){
        $chat = new ChatService();
        $chat->destroy($id);
    }
    
}
