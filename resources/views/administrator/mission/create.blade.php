<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireStyles
    <title>Missões</title>
</head>
<body>
    <a href="{{url('/admin/home')}}">Voltar</a>
    <form method="POST" action="{{url('/admin/missions/publish')}}">
        @csrf

        <div>
            <label for="title">Titulo</label>
            <input id="title" type="text" name="title" required autofocus />
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="description">Descrição</label>
            <textarea name="description" id="description" cols="30" rows="10" required></textarea>
            @error('description') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="landmark">Marco</label>
            <input id="landmark" type="number" name="landmark" required/>
            @error('landmark') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <select name="type_landmark" id="type_landmark" require>
                <option value="" selected disabled hidden>Tipo de Marco</option>
                <option value="1">Pontuação</option>
                <option value="2">Rubis</option>
                <option value="3">Moedas</option>
                <option value="4">Chances</option>
            </select>
            @error('type_landmark') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div >
            <label for="reward">Premio</label>
            <input id="reward" type="number" name="reward" required/>
            @error('reward') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <select name="type_reward" id="type_reward" require>
                <option value="" selected disabled hidden>Tipo de Premio</option>
                <option value="1">Pontuação</option>
                <option value="2">Rubis</option>
                <option value="3">Moedas</option>
                <option value="4">Chances</option>
            </select>
            @error('type_reward') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button>cria</button>
    </form>

    @livewire('App\Http\Livewire\ShowMissionsComponent')

    @livewireScripts
</body>
</html>