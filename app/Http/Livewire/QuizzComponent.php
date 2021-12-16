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
    public $modulesCards;
    public $option;
    public $score;
    public $optinSelected;
    public $answer;

    public function mount()
    {
        $this->hit = 0;
        $this->mistakes = 0;
        $this->modulesCards = $this->catchCards();
        $this->collection = collect([]);
        $this->score = 0;
        $this->answer = null;
    }

    public function render()
    {
        if($this->mistakes == 3){
            return redirect('/home');
        }
        $cardService = new CardService();

        $quantityCards = count($this->modulesCards);

        if($quantityCards == 0){
            return redirect('/home/module/{$this->slug}');
        }

        $randomCards = ($cardService->getAll())->random(3);
        $this->collection->push($randomCards);

        $card = $this->modulesCards->random(1);
        $this->answer = $card[0]->title;
        $this->collection->push($card);

        $alternative = ($this->collection->collapse())->shuffle();

        $score = $this->score;

        return view('livewire.quizz-component',compact('quantityCards', 'alternative', 'card', 'score'));
    }

    public function catchCards(){
        $moduleService = new ModuleService();
        $cardService = new CardService();
        $module = $moduleService->getBySlug($this->slug);
        return $cardService->getCards($module->getId(), $this->num);
    }

    public function checkAnswer(){
        if($this->answer == $this->optinSelected){
            dd("oh");
        }
    }

}
