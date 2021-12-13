<?php

namespace App\Http\Livewire;

use Livewire\Component;

class QuizzComponent extends Component
{
    /*public $cards;
    public $Erros = 0;
    public $position = 0;

    public public mount(){

    }*/

    public function render()
    {
        //push()
        //random()
        //shuffle()
        $randomCards = $this->cards->random(3);
        return view('livewire.quizz-component', compact(''));
    }
}
