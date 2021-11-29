<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Services\PlayerService;
use Illuminate\Support\Facades\Auth; 

class ShowUsersComponent extends Component
{
    public function render()
    {
        $PlayerService = new PlayerService();
        $users = $PlayerService->all()->with('registe');
        return view('livewire.show-users-component');
    }

    
}
