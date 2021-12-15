<?php

namespace App\Repositories;

use App\Models\Module;
use App\Repositories\AbstractClasses\AbstractRepository;

class ModuleRepository extends AbstractRepository
{
    protected $model = Module::class;

    public function store($url_image, $title, $description){

        $module = Module::create([
            'url_image' => $url_image,
            'title' => $title,
            'description' => $description
        ]);
        return $module;
    }

    public function destroy($slug){
        return $this->getBySlug($slug)->delete();
    }
}