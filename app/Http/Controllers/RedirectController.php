<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function index(){

        if(Auth::user()->hasRole('user')){
            return redirect('/home');

       }elseif(Auth::user()->hasRole('administrator')){
            return redirect('/dashboard');
       }

    }
}
