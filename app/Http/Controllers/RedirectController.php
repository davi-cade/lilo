<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PlayerRepository;
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
       if(Auth::user()->hasRole('user')){
                    return redirect('/home');

        }elseif(Auth::user()->hasRole('administrator')){
                return redirect('/dashboard');
        }
        
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
