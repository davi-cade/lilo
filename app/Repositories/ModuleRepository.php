<?php

namespace App\Repositories;

use App\Models\Module;
use App\Repositories\AbstractClasses\AbstractRepository;

class ModuleRepository extends AbstractRepository
{
    protected $model = Module::class;

}