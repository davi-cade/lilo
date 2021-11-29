<?php

namespace App\Http\Controllers\ResourceControllers;

use App\Http\Controllers\Controller;
use App\Services\GroupService;
use App\Services\PlayerService;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;

class GroupController extends Controller
{
    protected $groupService;
    protected $playerService;

    public function  __construct(GroupService $groupService, PlayerService $playerService){
        $this->groupService = $groupService;
        $this->playerService = $playerService;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $player = $this->playerService->getByField('user_id', Auth::user()->getId());
        $myGroups = $player->myGroups;
        $groups = $player->groupPlayer()->with('admin');
        return view('user.group.index', compact('myGroups', 'groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.group.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $group = $this->groupService->getBySlug($slug);
        $participatingPlayers = $group->participatingPlayers();
        return view('user.group.show', compact('group', 'participatingPlayers'));
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
