<?php

namespace App\Services;

use App\Repositories\GroupRepository;
use App\Services\AbstractClasses\AbstractService;

class GroupService extends AbstractService
{
    protected $repository = GroupRepository::class;

}