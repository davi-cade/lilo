<?php

namespace App\Repositories;

use App\Models\Mission;
use App\Repositories\AbstractClasses\AbstractRepository;

class MissionRepository extends AbstractRepository
{
    protected $model = Mission::class;
    
}