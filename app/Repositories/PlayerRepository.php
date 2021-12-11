<?php

namespace App\Repositories;

use App\Models\Player;
use App\Repositories\AbstractClasses\AbstractRepository;
use Illuminate\Support\Facades\Hash;

class PlayerRepository extends AbstractRepository
{
    protected $model = Player::class;

    public function store($nickname, $id){
        $player = Player::create([
            'nickname' => $nickname,
            'user_id' => $id
        ]);
        return $player;
    }

    public function allRegiste(){
        return $this->model::with('registe')->orderBy('score', 'desc')->get();
    }

}