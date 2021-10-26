<?php

namespace App\Repositories;

use App\Models\Module;
use App\Repositories\AbstractClasses\AbstractRepository;

class ModuleRepository extends AbstractRepository
{
    protected $model = Module::class;

    public function store($title, $description){

        $module = Module::create([
            'title' => $title,
            'position' => ($this->count())+1,
            'description' => $description
        ]);
        
        return $module;
    }

    public function destroy($slug){
        return $this->getBySlug($slug)->delete();
    }
}