<?php

namespace App\Http\Livewire;

use Livewire\Component;

use app\Services\MissionService;

class ShowMissionsComponent extends Component
{
    public function render()
    {
        $MissionService = new MissionService();
        $missions = $MissionService->getAll();
        return view('livewire.show-missions-component', compact('missions'));
    }

    public function destroy($id){
        $MissionService = new MissionService();
        return $MissionService->destroy($id);
    }
}
