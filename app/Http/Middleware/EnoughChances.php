<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\PlayerService;
use Illuminate\Support\Facades\Auth; 

class EnoughChances
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $playerService = new PlayerService();

        $player = $playerService->getByField('user_id', Auth::user()->getId());

        if($player->chances == 0){
            return redirect('/home')->withErrors(['msg' => 'Você não tem chances o bastante para jogar']);
        }

        return $next($request);
    }
}
