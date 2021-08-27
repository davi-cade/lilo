<?php

namespace App\Repositories\AbstractClasses;

abstract class AbstractRepository{

    protected $model;

    public function __construct(){
        $this->model = $this->resolveModel();
    }

    protected function resolveModel(){
        return app($this->model);       //Pegando o tipo de model da classe que estendeu 
    }

    public function all(){
        return $this->model::all();
    }

    public function findById($id){
        return $this->model::where('id', $id)->get();
    }

}