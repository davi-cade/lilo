<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Services\PlayerService;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth; 

class ShowUsersComponent extends Component
{
    public function render()
    {
        $PlayerService = new PlayerService();
        $users = $PlayerService->allRegiste();
        return view('livewire.show-users-component', compact('users'));
    }

    public function destroy($id){
        $UserService = new UserService();
        $UserService->destroy($id);
    }

    
}
