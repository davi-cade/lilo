<?php

namespace App\Repositories;

use App\Models\Player;
use App\Repositories\AbstractClasses\AbstractRepository;
use Illuminate\Support\Facades\Hash;

class PlayerRepository extends AbstractRepository
{
    protected $model = Player::class;

    public function store($nickname, $id){

        $Player = Player::create([
            'nickname' => $nickname,
            'user_id' => $id
        ]);
    
        return $Player;
    }

}