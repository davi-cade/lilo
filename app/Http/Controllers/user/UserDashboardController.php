<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Services\PlayerService;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    protected $playerService;

    public function  __construct(PlayerService $playerService){
        $this->playerService= $playerService;
    }

    public function index(){
        $player = $playerService->getFirstByField('user_id', Auth::user()->getId()); 
        $instanceModule =  $playerService->getByField('user_id', Auth::user()->getId())->modulePlayer()->with('module')->get();
        return view('user.dashboard', compact('player', 'instanceModule'));
    }
}
