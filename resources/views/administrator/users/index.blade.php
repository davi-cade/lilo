<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireStyles
    <title>Users</title>
</head>
<body>
    <a href="{{url('/admin/home')}}">Voltar</a>
    @livewire('App\Http\Livewire\ShowUsersComponent')
    @livewireScripts
</body>
</html>