<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\PlayerService;
use Illuminate\Support\Facades\Auth; 

class ShowPlayersComponent extends Component
{
    public $nickname;
    public $title;
    public $description;
    public $allPlayers;
    public $participants;

    public function mount(){
        $this->participants = collect();
    }

    public function render(){
        return view('livewire.show-players-component', 
        [
            'allPlayers' => Player::when($this->nickname, function($query, $nickname){
                return $query->where('nickname', 'like', "%$nickname%")->orderBy('nickname', 'desc')->get();
            }), 
            'players' => $this->participants->all()
        ]);
    }

    protected $rules = [
        'title' =>['required', 'string', 'min:5', 'max:255'],
        'description' =>['required', 'string']
    ];

    public function addPalyer($name){
        $this->participants->push($name);
    }

    public function submit(){

    }
}
