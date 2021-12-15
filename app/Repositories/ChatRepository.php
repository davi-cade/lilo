<?php

namespace App\Repositories;

use App\Models\Chat;
use App\Repositories\AbstractClasses\AbstractRepository;

class ChatRepository extends AbstractRepository
{
    protected $model = Chat::class;

    public function store($group_id, $slug){
        $chat = Chat::create([
            'group_id' => $group_id,
            'slug' => $slug
        ]);
        return $chat;
    }
    
}