<?php

namespace App\Repositories;

use App\Models\Chat;
use App\Repositories\AbstractClasses\AbstractRepository;

class ChatRepository extends AbstractRepository
{
    protected $model = Chat::class;

    
}