<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Services\PlayerService;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index(PlayerService $service){

        $playerService = $service ;

        $player = $playerService->getFirstByField('user_id', Auth::user()->getId()); 
       
        $instanceModule =  $playerService->getByField('user_id', Auth::user()->getId())->modulePlayer()->with('module')->get();

        return view('user.dashboard', compact('player', 'instanceModule'));
    }
}
