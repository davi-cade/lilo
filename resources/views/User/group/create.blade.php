@extends('layouts.main')

@section('title', 'Criar Novo')

@section('content')

    <h3>Crie seu grupo</h3>
    @livewireStyles
    @livewire('App\Http\Livewire\ShowPlayersComponent')
    @livewireScripts

@endsection