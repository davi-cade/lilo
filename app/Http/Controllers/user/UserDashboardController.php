<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Repositories\ChestRepository;
use App\Models\Chest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    protected $chest;
    
    public function __construct(ChestRepository $chestModel){
        $this->chest = $chestModel;
    }

    public function index(){
        $chests = $this->chest->getByField('user_id', Auth::user()->getId());
        return view('user.dashboard', compact('chests'));
    }
}
