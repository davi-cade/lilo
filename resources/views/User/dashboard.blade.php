@extends('layouts.main')

@section('head')

<link rel="stylesheet" href="\css\nav.css">
<link rel="stylesheet" href="\css\painel.css">

@endsection


@section('title', 'Home')

@section('content')
<div class="container">
        
        <header>
            <div class="nav">

                <div class="row one">

                    <div class="col-1 col-sm-2 col-md-3 col-lg-4 col-xl-4">
                        <img class="logo" src="/img/lilo.svg" alt="logo">
                    </div>

                    <div class="col-1 col-sm- col-md-1 col-lg- col-xl-">
                        <img class="trophy" src="/img/trophy.svg" alt="trophy">
                    </div>

                    <div class="col-1">
                        <div class="objeto_trophy">
                        {{$player['score']}}
                        </div>
                    </div>

                    <div class="col-1">
                        <img class="coin" src="/img/coins.svg" alt="co">
                    </div>

                    <div class="col-1">
                        <div class="objeto_coin">
                        {{$player['coins']}}
                        </div>
                    </div>

                    <div class="col-1">
                        <img class="ruby" src="/img/ruby.svg" alt="ruby">
                    </div>

                    <div class="col-1">
                        <div class="objeto_ruby">
                        {{$player['rubys']}}
                        </div>
                    </div>

                    <div class="col-1">
                        <div class="menu_profile">
                            <img class="menu_avatar--frame" src="/img/frame.svg" alt="Avatar Frame">   
                            <img class="menu_avatar" src="{{asset(Auth::user()->directory->url_avatar)}}" alt="Avatar Picture">
                          </div>
                    </div>

                    <div class="col-1  "> 
                        <div class="mobile-menu">
                            <div class="line1"></div>
                            <div class="line2"></div>
                            <div class="line3"></div>
                            </div>
                        <ul class="nav-list">
                            <li><a href="{{url('/profile')}}">Perfil</a></li>
                            <li><a href="{{url('/group')}}">Grupos</a></li>
                            <li><a href="#">Sobre</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                                </form>
                            </li>
                        </ul>
                    </div>

                    
               
            </div>
            </div>
        </header>

        <div class="box">

              <div class="row tow">

                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                  <div class="box_one">
                  </div>

                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                  <div class="box_two">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>

    <script src="/js/mobile-navbar.js"></script>






















    <!-- <header>
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
    </main> -->
@endsection