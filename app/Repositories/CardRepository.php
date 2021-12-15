<?php

namespace App\Repositories;

use App\Models\Card;
use App\Repositories\AbstractClasses\AbstractRepository;

class CardRepository extends AbstractRepository
{
    protected $model = Card::class;

    public function store($title, $url_video, $belonging_module_id){
        $card = Card::create([
            'title' => $title,
            'url_video' => $url_video, 
            'belonging_module_id' => $belonging_module_id
        ]);
        return $card;
    }
}