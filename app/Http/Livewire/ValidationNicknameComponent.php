<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Services\LaunchService;

use Livewire\Component;

class ValidationNicknameComponent extends Component
{
    public $nickname;

    protected $rules = [
        'nickname' =>['required', 'string', 'min:3', 'max:255', 'unique:players'],
    ];

    public function render()
    {
        return view('livewire.validation-nickname');
    }

    public function valid(){
        $this->validate();
    }

    public function submit(LaunchService $service)
    {
        $this->validate();

        $launchService = $service;

        $launchService->launch($this->nickname, Auth::user()->getId());

        return redirect('/redirect');
    }
}
