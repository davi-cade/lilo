<?php

namespace App\Repositories;

use App\Models\Group;
use App\Repositories\AbstractClasses\AbstractRepository;

class GroupRepository extends AbstractRepository
{
    protected $model = Group::class;
}