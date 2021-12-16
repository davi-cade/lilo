<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

use App\Services\UserService;
use App\Services\PlayerService;


class ProfileController extends Controller
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
        $registe = $this->UserService->getById(Auth::user()->getId());
        return view('Porfile.profile', compact('registe'));
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
