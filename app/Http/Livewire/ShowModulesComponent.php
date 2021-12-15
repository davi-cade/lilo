<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Services\ModuleService;

class ShowModulesComponent extends Component
{
    public function render()
    {
        $service = new ModuleService();
        $modules = $service->getAll();
        return view('livewire.show-modules-component', compact('modules'));
    }

    public function destroy($id){
        $service = new ModuleService();
        return $service->destroy($id);
    }
}
