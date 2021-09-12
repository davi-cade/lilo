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
        <h1>{{Auth::user()->name}}</h1>
        <img src="{{asset(Auth::user()->avatar)}}" alt="user-avatar">

        <h1>Rubis: {{$chests['rubys']}}</h1>
        <h1>Coin: {{$chests['coins']}}</h1>
        <h1>Chances: {{$chests['chances']}}</h1>
        <h1>Score: {{$chests['score']}}</h1>
        
        <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
    </form>
    </header>

    <a href="{{url('')}}">Criar novo grupo</a>

</body>
</html>