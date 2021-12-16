<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\ModuleService;
use App\Services\PlayerService;
use App\Services\CardService;
use App\Services\Pivots\CardPlayerService;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

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
        $cardService = new CardService();
        $moduleService = new ModuleService();
        $playerService = new PlayerService();
        $cardPlayerService = new CardPlayerService();

        $this->collection = collect([]);
        $collectionCard = collect([]);

        $module = $moduleService->getBySlug($this->slug);
        $player = $playerService->getByField('user_id', Auth::user()->getId());

        if($this->mistakes == 3){
            redirect('/home');
        }

        if($this->modulesCards == null){
            $player->setScore($this->score); 
            $player->save();
            redirect('/home/module/{$this->slug}');
        }

        foreach ($this->modulesCards as $key) {
            $var = $cardPlayerService->especific($key->getId(), $player->getId());
            if($var->assimilated == 0) {
                $collectionCard->push($key);
            }
        }
      
        if(count($collectionCard) > 0) {
            $quantityCards = count($collectionCard);
            $card = $collectionCard->random(1); 
            $randomCards = ($cardService->getAll())->random(3);
            $this->collection->push($randomCards);
            $this->collection->push($card);
            $alternative = ($this->collection->collapse())->shuffle();
            $this->answer = $card[0]->title;
            $yes = 0;
        }else{
            $quantityCards = 0;
            $alternative = collect([]);
            $card = collect([]);
            $yes = 1;
        }

        $score = $this->score;

        return view('livewire.quizz-component',compact('quantityCards', 'alternative', 'card', 'score', 'yes'));
    }

    public function catchCards(){
        $moduleService = new ModuleService();
        $cardService = new CardService();
        $module = $moduleService->getBySlug($this->slug);
        return $cardService->getCards($module->getId(), $this->num);
    }

    public function checkAnswer($id){
        $cardPlayerService = new CardPlayerService();
        
        if($this->answer == $this->optinSelected){
            $this->hit += 1;
            $this->score+=(100)*($this->hit);

            $var = $cardPlayerService->getById($id);
            $var->setAssimilated(1);
            $var->save();

        }else if($this->answer != $this->optinSelected){
            $this->mistakes += 1;
        }
    }

    public function finally(){
        $playerService = new PlayerService();
        $player = $playerService->getByField('user_id', Auth::user()->getId());
        $player->setScore($this->score);
        $player->setCoins(($this->score)*0.1);
        if($this->score > 0){
            $player->setRubys(1);
        }
        $player->save();
        return redirect('/home');
    }
}
