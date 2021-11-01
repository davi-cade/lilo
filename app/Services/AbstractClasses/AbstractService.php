<?php

namespace App\Services\AbstractClasses;

abstract class AbstractService{

    protected $repository;

    public function __construct(){
        $this->repository = $this->resolveRepository();
    }

    protected function resolveRepository(){
        return app($this->repository);       //Pegando o tipo de Repositorio da classe que estendeu 
    }

    public function getAll(){
        return $this->repository->getAll();
    }
    
    public function getById($id){
        return $this->repository->getById($id);
    }

    public function getBySlug($slug){
        return $this->repository->getBySlug($slug);
    }

    public function getByField($field, $value){
        return $this->repository->getFirstByField($field, $value);
    }

    public function getAllByField($field, $value){
        return $this->repository->getByField($field, $value);
    }

    public function getFirstByField($field, $value){
        return $this->repository->getFirstByField($field, $value)->toArray();
    }

    public function count(){
        return $this->repository->count();
    }

}