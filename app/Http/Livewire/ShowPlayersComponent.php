<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Player;
use Illuminate\Support\Facades\Auth; 

class ShowPlayersComponent extends Component
{
    public $nickname;

    public function render()
    {

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
