<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @livewireStyles

</head>
<body>
    <a href="{{url('/admin/home')}}">Voltar</a>
    <h1>Nome: {{$module['title']}}</h1>
    <p>Descrição: {{$module['description']}}</p>

    <form action="/admin/module/{{$module['slug']}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    @livewire('App\Http\Livewire\ShowCardsComponent', ['post' => $module['slug']])

    @livewireScripts
</body>
</html>


