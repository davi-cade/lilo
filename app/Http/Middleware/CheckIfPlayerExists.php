<?php

namespace App\Http\Middleware;

use Closure;
use App\Repositories\PlayerRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class CheckIfPlayerExists
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   
        $playerRepository = new PlayerRepository;

        if(!$playerRepository->getFirstByField('user_id', Auth::user()->getId())){
            return redirect('/nickname');
        }
        return $next($request);
    }
}
