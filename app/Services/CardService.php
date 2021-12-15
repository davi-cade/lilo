<?php

namespace App\Services;

use App\Repositories\CardRepository;
use App\Services\AbstractClasses\AbstractService;

class CardService extends AbstractService
{
    protected $repository = CardRepository::class;

    public function store($title, $url_video, $belonging_module_id){
        return $this->repository->store($title, $url_video, $belonging_module_id);
    }
}