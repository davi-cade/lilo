<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administradores</title>
</head>
<body>
    <header>
        <h1>Olá, {{Auth::user()->getName()}}</h1>
        <img src="{{asset(Auth::user()->directory->url_avatar)}}" alt="admin-avatar">
        <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
    </form>
    </header>
    <main>
        <nav>
            <a href="{{url('/profile')}}">Perfil</a>
            @role('superadministrator')
                <a href="{{url('/admin/register')}}">Administradores</a>
                <a href="{{url('/admin/reports')}}">Mini Relatórios</a>
            @endrole
            <a href="{{url('/admin/users')}}">Usuários</a>
            <a href="{{url('/admin/missions')}}">Missões</a>  
            <a href="{{url('/admin/module')}}">Módulos</a>
        </nav>
        <div>
            <article>Número de Player: {{$totalPlayer}}</article>
            <article>Número de Módulos: {{$totalModules}}</article>
            @role('superadministrator')
                <article>Número de ADM: {{$totalAdmins}}</article>
            @endrole
        </div>
    </main>
</body>
</html>
