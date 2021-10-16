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
        return $this->model::where('id', $id)->firstOrFail();
    }

    public function getBySlug($slug){
        return $this->model::where('slug', $slug)->firstOrFail();
    }

    public function getByField($field, $value){
        return $this->model::where($field, $value)->get();
    }

    public function getFirstByField($field, $value){
        return $this->model::where($field, $value)->first();
    }

    public function count(){
        return $this->model::count();
    }

}