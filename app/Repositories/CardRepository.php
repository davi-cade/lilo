<?php

namespace App\Repositories;

use App\Models\Card;
use App\Repositories\AbstractClasses\AbstractRepository;

class CardRepository extends AbstractRepository
{
    protected $model = Card::class;

    public function store($title, $url_video, $difficulty_level, $belonging_module_id){
        $card = Card::create([
            'title' => $title,
            'url_video' => $url_video,
            'difficulty_level' => $difficulty_level, 
            'belonging_module_id' => $belonging_module_id
        ]);
        return $card;
    }

    public function destroy($id){
        return $this->getById($id)->delete();
    }

    public function getCards($id, $num){
        return $this->model::where('belonging_module_id', $id)->where('difficulty_level', $num)->get();
    }
}