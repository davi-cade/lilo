<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

use App\Services\UserService;
use App\Services\PlayerService;


class UserProfileController extends Controller
{
    protected $UserService;
    protected $PlayerService;
    
   public function __construct(UserService $UserService, PlayerService $PlayerService){
        $this->UserService = $UserService;
        $this->PlayerService = $PlayerService;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $registe = $this->UserService->getRegisteById(Auth::user()->getId());
        $player = $this->playerService->getFirstByField('user_id', Auth::user()->getId()); 
        return view('User.profile', compact('registe', 'palyer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
