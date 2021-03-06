<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Services\ExtraServices\LauncherExtraService;

use Livewire\Component;

class ValidationNicknameComponent extends Component
{
    public $nickname;

    protected $rules = [
        'nickname' =>['required', 'string', 'min:5', 'max:255', 'unique:players'],
    ];

    public function render()
    {
        return view('livewire.validation-nickname-component');
    }

    public function valid(){
        $this->validate();
    }

    public function submit(LauncherExtraService $service)
    {
        $this->validate();

        $launchExtraService = $service;

        $launchExtraService->launch($this->nickname, Auth::user()->getId());

        return redirect('/redirect');
    }
}
