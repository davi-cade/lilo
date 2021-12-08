<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\ReportService;

class ReportController extends Controller
{
    protected $ReportService;
    
    public function __construct(ReportService $ReportService){
        $this->ReportService = $ReportService;
    }

    public function index()
    {
        $reports = $this->ReportService->allAdmin();
        return view('administrator.superadministrator.report.index', compact('reports'));
    }


}
