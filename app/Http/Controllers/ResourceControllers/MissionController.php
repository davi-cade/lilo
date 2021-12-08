<?php

namespace App\Http\Controllers\ResourceControllers;

use App\Services\MissionService;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MissionController extends Controller
{
    protected $MissionService;

    public function  __construct(MissionService $MissionService){
        $this->MissionService = $MissionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrator.mission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:5', 'max:255'],
            'description' => ['required', 'max:1000'],
            'landmark' => ['required', 'numeric'],
            'reward' => ['required', 'numeric', 'between:1,5000'],
            'type_landmark' => ['required', 'in:1,2,3,4'],
            'type_reward' => ['required', 'in:1,2,3,4']
        ]);
        return $this->MissionService->store(
            $request->title,
            $request->description,
            $request->landmark,
            $request->reward,
            $request->type_landmark,
            $request->type_reward
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
