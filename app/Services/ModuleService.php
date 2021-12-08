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
        
        return redirect('/admin/module');
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