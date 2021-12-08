<?php

namespace App\Services;

use App\Repositories\ReportRepository;
use App\Services\AbstractClasses\AbstractService;

class ReportService extends AbstractService
{
    protected $repository = ReportRepository::class;

    public function store($type_report, $model_id, $model_type, $user_id){
        return $this->repository->store($type_report, $model_id, $model_type, $user_id);
    }

    public function allAdmin(){
        return $this->repository->allAdmin();
    }
}