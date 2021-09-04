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
        <h1>Olá, {{Auth::user()->name}}</h1>
        <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
    </form>
    </header>
    <main>
        <a href="{{url('/dashboard/registro')}}">Cadastrar novo Administardor</a>
        <div>
            <p>Número de Módulos: {{$toalNumberModules}}</p>
            @foreach ($modules as $module)
                <div style="border:2px solid gray;">
                    <input type="text" name="" id="" value="{{$module->title}}">
                    <textarea name="" id="" style="width:500px;">
                        {{$module->description}}
                    </textarea>
                    <a href="{{url('')}}"></a>
                </div>
            @endforeach
        </div>
        
                            
    </main>
</body>
</html>
