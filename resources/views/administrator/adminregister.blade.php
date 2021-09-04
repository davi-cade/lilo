<a href="{{url('/dashboard')}}">Voltar</a>
<form method="POST" action="{{url('/dashboard/registro')}}">
    @csrf

    <div>
        <label for="name">Nome Completo</label>
        <input id="name" type="text" name="name" required autofocus />
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required />
    </div>

    <div >
        <label for="password">Senha</label>
        <input id="password" type="password" name="password" required autocomplete="new-password" />
    </div>

    <div>
        <label for="password_confirmation">Confimer sua senha</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required />
    </div>

    <button>Registrar</button>
</form>