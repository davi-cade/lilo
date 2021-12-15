<?php

namespace App\Services;

use App\Repositories\ModuleRepository;
use App\Services\AbstractClasses\AbstractService;

class ModuleService extends AbstractService
{
    protected $repository = ModuleRepository::class;

    public function store($url_image, $title, $description){
        return $this->repository->store($url_image, $title, $description);
    }

    public function destroy($slug){
        try{
            $this->repository->destroy($slug);
        }catch (Exception $e) {
            return redirect('/admin/module')->with('status', 'Módulo não encontrado');
        }
        return redirect('/admin/module')->with('status', 'Módulo deletado com sucesso');
    }
    
}