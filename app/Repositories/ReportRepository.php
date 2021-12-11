<?php

namespace App\Repositories;

use App\Models\Report;
use App\Repositories\AbstractClasses\AbstractRepository;

class ReportRepository extends AbstractRepository
{
    protected $model = Report::class;
    
    public function store($type_report, $model_id, $model_type, $user_id){
        $report = Report::create([
            'type_report' => $type_report,
            'model_id' => $model_id,
            'model_type'=> $model_type,
            'user_id' => $user_id
        ]);
        return $report;
    }

    public function allAdmin(){
        return $this->model::with('Admin')->orderByDesc('created_at')->get();
    }
}