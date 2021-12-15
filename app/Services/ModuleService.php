<?php

namespace App\Services;

use App\Repositories\ModuleRepository;
use App\Services\AbstractClasses\AbstractService;

class ModuleService extends AbstractService
{
    protected $repository = ModuleRepository::class;

    public function store($url_image, $title, $description){
        $module = $this->repository->store($url_image, $title, $description);
        return $module;
    }

    public function destroy($slug){
        return $this->repository->destroy($slug);
    }
    
}