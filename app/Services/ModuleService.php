<?php

namespace App\Services;
use App\Repositories\ModuleRepository;

class ModuleService
{
    protected $repository;

    public function  __construct(ModuleRepository $moduleRepository){
        $this->repository = $moduleRepository;
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

    public function store(array $module){
        
    }

    public function destroy($slug){
        try{
            $this->repository->destroy($slug);
        }catch (Exception $e) {
            return redirect('/redirect')->with('status', 'Módulo não encontrado');
        }
        return redirect('/redirect')->with('status', 'Módulo deletado com sucesso');
    }
    
}