<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Player;
use Illuminate\Support\Facades\Auth; 

class ShowPlayersComponent extends Component
{
    public $nickname;
    public $title;
    public $description;
    public $participants=[];

    public function render()
    {
        return view('livewire.show-players-component', 
        ['players'=>Player::when($this->nickname, function($query, $nickname){
            return $query->where('nickname', 'like', "%$nickname%")->orderBy('nickname', 'desc')->get();
        })]);
    }

    protected $rules = [
        'title' =>['required', 'string', 'min:5', 'max:255'],
        'description' =>['required', 'string']
    ];

    public function addPalyer($nickname){
        $participants[] = $nickname;
        dd($participants[0]);
    }

    public function submit(){

    }
}
