<?php

namespace App\Http\Controllers;

use App\Repositories\ChestRepository;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    protected $chest;
    public function __construct(ChestRepository $chestModel)
    {
        $this->chest = $chestModel;
    }
    public function index(){
        $chests = $this->chest->all();
        return view('User.dashboard', compact('chests'));
    }
}
