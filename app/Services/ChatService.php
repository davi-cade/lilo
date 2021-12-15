<?php

namespace App\Services;

use App\Repositories\ChatRepository;
use App\Services\AbstractClasses\AbstractService;

class ChatService extends AbstractService
{
    protected $repository = ChatRepository::class;

    public function store($group_id, $slug){
        return $this->repository->store($group_id, $slug);
    }
}