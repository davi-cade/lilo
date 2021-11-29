@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <header>
        <h1>{{Auth::user()->getName()}}</h1>
        <img src="{{asset(Auth::user()->directory->url_avatar)}}" alt="user-avatar">

        <h1>Rubis: {{$player['rubys']}}</h1>
        <h1>Coin: {{$player['coins']}}</h1>
        <h1>Chances: {{$player['chances']}}</h1>
        <h1>Score: {{$player['score']}}</h1>

        <a href="{{url('/profile')}}">Perfil</a>
        <a href="{{url('/group')}}">Grupo</a>
        
        <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
        </form>
    </header>
    <main>
        
        <div>
        @foreach ($instanceModule as $key)
            <h2>{{$key->module->getTitle()}}</h2>
            <p>{{$key->module->getDescription()}}</p>
            <div>
                <p>
                    @if($key->getTotalAvailableCard() === 0)
                        0
                    @else
                        {{number_format((($key->getTotalAssimilatedCard()/$key->getTotalAvailableCard())*100),0,",",".")}}
                    @endif
                %</p>
            </div>
            <a href="modulo/$key->module->getSlug()">Ver</a>
        @endforeach
        </div>
    </main>
@endsection