<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Services\CardService;
use App\Services\ModuleService;
use Livewire\WithFileUploads;

use App\Services\ExtraServices\ModulesPublisherExtraService;


class ShowCardsComponent extends Component
{
    use WithFileUploads;

    public $post;
    public $title;
    public $video;

    protected $rules = [
        'title' =>['required', 'string', 'min:5', 'max:255'],
        'video' => ['required', 'file', 'mimetypes:video/mp4,video/avi,video/mpeg', 'max:1999']
    ];

    public function render()
    {
        $service = new CardService();
        $cards = $service->getAll();
        return view('livewire.show-cards-component', compact('cards'));
    }

    public function destroy($id){
        $service = new CardService();
        return $service->destroy($id);
    }

    public function submit(){
        $this->validate();
        $service = new CardService();
        $moduleService = new ModuleService();
        $publisher = new ModulesPublisherExtraService();

        $module = $moduleService->getBySlug($this->post);

        $vid ='/'.'storage/'.($this->video->store('video/'.$module->getTitle().'/'.$this->title));

        $card = $service->store($this->title, $vid, $module->getId());

        $publisher->publishCard($card->getId());
    }
}
