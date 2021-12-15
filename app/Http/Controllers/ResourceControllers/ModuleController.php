<?php

namespace App\Http\Controllers\ResourceControllers;

use App\Http\Controllers\Controller;
use App\Services\ModuleService;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    protected $module;

    public function __construct(ModuleService $moduleService)
    {
        $this->module = $moduleService;
    }

    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalNumberModules = $this->module->count();
        $modules = $this->module->getAll();
        return view('administrator.module.index', compact('totalNumberModules', 'modules'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.module.create');
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
            'image' => ['sometimes', 'image', 'mimes:jpg,jpeg,png,svg,bmp', 'max:5000'],
            'title' => ['required', 'string', 'min:5', 'max:255'],
            'description' => ['required', 'max:1000'],
        ]);

        $img = '/img/userProfile/default-avatar.svg';
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $img ='/'.'storage/'.($request->file('image')->store('img/module/'.$request->title));
        }
        return $this->module->store($img, $request->title, $request->description);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $module = $this->module->getByField('slug', $slug);
        $cards = $module->cards;
        return view('administrator.module.show', compact('module', 'cards'));
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
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        return $this->module->destroy($slug);
    }
}
