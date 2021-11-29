<?php

namespace App\Http\Controllers\user;


class UserModuleController extends Controller
{

    public function __construct()
    {

    }

    public function show($slug)
    {
        
        return view('user.module.show');
    }
}