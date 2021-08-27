<?php

namespace App\Repositories;

use App\Models\Task;
use App\Repositories\AbstractClasses\AbstractRepository;

class ModuleRepository extends AbstractRepository
{
    protected $model = Task::class;

}