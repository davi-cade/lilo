<?php

namespace App\Repositories;

use App\Models\Group;
use App\Repositories\AbstractClasses\AbstractRepository;

class GroupRepository extends AbstractRepository
{
    protected $model = Group::class;

    public function store($name, $description, $admin_id){
        $group = Group::create([
            'name' => $name,
            'description' => $description,
            'admin_id' => $admin_id
        ]);
        return $group;
    }
}