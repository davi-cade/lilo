<a href="{{url('/dashboard')}}">Voltar</a>
<form method="POST" action="{{url('/dashboard/registro')}}">
    @csrf

    <div>
        <label for="name">Nome</label>
        <input id="name" type="text" name="name" required autofocus />
        @error('name') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="surname">Sobrenome</label>
        <input id="surname" type="text" name="surname" required autofocus />
        @error('surname') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="birth_date">Data nascimento</label>
        <input id="birth_date" type="date" name="birth_date" required autofocus />
        @error('birth_date') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required />
        @error('email') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div >
        <label for="password">Senha</label>
        <input id="password" type="password" name="password" required autocomplete="new-password" />
        @error('password') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="password_confirmation">Confimer sua senha</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required />
        @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror
    </div>

    <button>Registrar</button>
</form>