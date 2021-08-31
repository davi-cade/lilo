<?php

namespace App\Repositories;

use App\Models\Chest;
use App\Repositories\AbstractClasses\AbstractRepository;

class chestRepository extends AbstractRepository
{
    protected $model = Chest::class;
}