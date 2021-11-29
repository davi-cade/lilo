<?php

namespace App\Services;

use App\Repositories\DirectoryRepository;
use App\Services\AbstractClasses\AbstractService;

class DirectoryService extends AbstractService
{
    protected $repository = DirectoryRepository::class;
    
    public function store($url_avatar, $url_directory, $directoryable_id, $directoryable_type){
        return $this->repository->store($url_avatar, $url_directory, $directoryable_id, $directoryable_type);
    }
    
}