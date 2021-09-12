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

    public function getAll(){
        return $this->model::all();
    }

    public function getById($id){
        return $this->model::where('id', $id)->first()->toArray();
    }

    public function getBySlug($slug){
        return $this->model::where('slug', $slug)->get();
    }

    public function getByField($field, $id){
        return $this->model::where($field, $id)->first()->toArray();
    }

    public function count(){
        return $this->model::count();
    }

}