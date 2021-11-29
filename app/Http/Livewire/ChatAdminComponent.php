<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\ChatService;

class ChatAdminComponent extends Component
{
    public $ChatService;

    public function mount(){
        $this->ChatService = new ChatService();
    }

    public function render()
    {
        $chat = $this->ChatService->getByField('type', 'Administrator');
        $messages = $chat->messages();
        return view('livewire.chat-admin-component', compact('messages'));
    }

    
}
