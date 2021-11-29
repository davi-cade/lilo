<?php

namespace App\Services;

use App\Repositories\ChatRepository;
use App\Services\AbstractClasses\AbstractService;

class ChatService extends AbstractService
{
    protected $repository = ChatRepository::class;

}