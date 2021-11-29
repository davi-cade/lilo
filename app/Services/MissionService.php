<?php

namespace App\Services;

use App\Repositories\MissionRepository;
use App\Services\AbstractClasses\AbstractService;

class MissionService extends AbstractService
{
    protected $repository = MissionRepository::class;

}