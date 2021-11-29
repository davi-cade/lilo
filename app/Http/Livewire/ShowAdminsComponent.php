<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Services\AdminService;

class ShowAdminsComponent extends Component
{
    public function render()
    {
        $AdminService = new AdminService();
        $admins = $AdminService->getAll();
        return view('livewire.show-admins-component', compact('admins'));
    }

    public function destroy($id){
        $AdminService = new AdminService();
        return $AdminService->destroy($id);
    }

    public function riseToSuperadministrator($id){
        $AdminService = new AdminService();
        return $AdminService->riseToSuperadministrator($id);
    }
}
