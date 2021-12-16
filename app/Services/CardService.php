<?php

namespace App\Services;

use App\Repositories\CardRepository;
use App\Services\AbstractClasses\AbstractService;

class CardService extends AbstractService
{
    protected $repository = CardRepository::class;

    public function store($title, $url_video, $difficulty_level, $belonging_module_id){
        return $this->repository->store($title, $url_video, $difficulty_level, $belonging_module_id);
    }

    public function destroy($id){
        try{
            $this->repository->destroy($id);
        }catch (Exception $e) {
            return 'Erro';
        }
        return 'sucesso';
    }

    public function getCards($id, $num){
        $this->repository->getCards($id, $num);
    }
}