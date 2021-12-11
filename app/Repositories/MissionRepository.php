<?php

namespace App\Repositories;

use App\Models\Mission;
use App\Repositories\AbstractClasses\AbstractRepository;

class MissionRepository extends AbstractRepository
{
    protected $model = Mission::class;
    
    public function store($title, $description, $landmark, $reward, $type_landmark, $type_reward){
        $mission = Mission::create([
            'title' => $title,
            'description' => $description,
            'landmark' => $landmark,
            'reward' => $reward,
            'type_landmark' => $type_landmark,
            'type_reward' => $type_reward
        ]);
        return $mission;
    }

    public function destroy($id){
        $mission = $this->getById($id);
        return $mission->delete();
    }
}