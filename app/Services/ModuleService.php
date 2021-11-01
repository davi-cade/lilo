<?php

namespace App\Services;

use App\Repositories\ModuleRepository;
use App\Services\ExtraServices\ModulesPublisherExtraService;
use App\Services\AbstractClasses\AbstractService;

class ModuleService extends AbstractService
{
    protected $repository = ModuleRepository::class;

    public function store($title, $description){

        $publisher = new ModulesPublisherExtraService;

        $module = $this->repository->store($title, $description);

        $publisher->publish($module->getId());
        
        return redirect('/module');
    }

    public function destroy($slug){
        try{
            $this->repository->destroy($slug);
        }catch (Exception $e) {
            return redirect('/module')->with('status', 'Módulo não encontrado');
        }
        return redirect('/module')->with('status', 'Módulo deletado com sucesso');
    }
    
}