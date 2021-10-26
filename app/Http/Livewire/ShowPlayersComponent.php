<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Player;
use Illuminate\Support\Facades\Auth; 
use App\Repositories\PlayerRepository;

class ShowPlayersComponent extends Component
{
    public $nickname;

    public function render(PlayerRepository $repository)
    {

        //$PlayerNickname = $repository->getFirstByField('user_id', Auth::user()->getId())->nickname; where('nickname', '!=', $this->PlayerNickname)->

        return view('livewire.show-players-component', 
        ['players'=>Player::when($this->nickname, function($query, $nickname){
            return $query->where('nickname', 'like', "%$nickname%")->orderBy('nickname', 'desc')->get();
        })]);
    }

    public function addPalyer(){

    }

    public function createGroup(){

    }
}
