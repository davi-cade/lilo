<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>{{Auth::user()->getName()}}</h1>
        <img src="{{asset(Auth::user()->avatar)}}" alt="user-avatar">

        <h1>Rubis: {{$player['rubys']}}</h1>
        <h1>Coin: {{$player['coins']}}</h1>
        <h1>Chances: {{$player['chances']}}</h1>
        <h1>Score: {{$player['score']}}</h1>

        <a href="{{url('/perfil')}}">Perfil</a>
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
        @endforeach
        </div>
    </main>
</body>
</html>