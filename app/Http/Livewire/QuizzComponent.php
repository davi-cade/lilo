<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\ModuleService;
use App\Services\CardService;

class QuizzComponent extends Component
{
    public $slug;
    public $num;

    public $hit;
    public $mistakes;

    public function mount()
    {
        $this->hit = 0;
        $this->mistakes = 0;
    }

    public function render()
    {
        if($this->mistakes == 3){
            return redirect('/home');
        }

        $moduleService = new ModuleService();
        
        $cardService = new CardService();

        $module = $moduleService->getBySlug($this->slug);

        $allCards = $cardService->getAll();

        $modulesCards = $cardService->getCards($module->getId(), $this->num);
        
        $quantityCards = count($modulesCards);

        

        //push()
        //random()
        //shuffle()
        //$randomCards = $this->cards->random(3);
        return view('livewire.quizz-component');
    }

}
