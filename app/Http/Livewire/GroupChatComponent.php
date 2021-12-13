<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\ChatService;

class GroupChatComponent extends Component
{
    public $ChatService;

    public function mount(){
        $this->ChatService = new ChatService();
    }

    public function render()
    {
        return view('livewire.group-chat-component');
    }

    
}
