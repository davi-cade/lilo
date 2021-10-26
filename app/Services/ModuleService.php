<?php

namespace App\Services;
use App\Repositories\ModuleRepository;
use App\Services\LaunchService;

class ModuleService
{
    protected $repository;
    protected $launch;

    public function  __construct(ModuleRepository $moduleRepository, LaunchService $launchService){
        $this->repository = $moduleRepository;
        $this->launch = $launchService;
    }

    //ORM Function

    public function getAll(){
        return $this->repository->getAll();
    }
    
    public function getBySlug($slug){
        return $this->repository->getBySlug($slug)->toArray();
    }
    
    public function count(){
        return $this->repository->count();
    }


    //CRUD

    public function store($title, $description){
        $module = $this->repository->store($title, $description);
        $this->launch->modulePublisher($module->getId());
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