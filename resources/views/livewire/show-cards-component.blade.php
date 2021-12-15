<div>
    <form wire:submit.prevent="submit"  enctype="multipart/form-data">
        <h3>Cria os cartões</h3>

        @if($video)
            <video autoplay loop preload="auto" src="{{ $video->temporaryUrl()}}"></video><br/>
        @endif

        <label for="image">Por favor, faça o upload do video</label>
        <input type="file" name="video" id="video" wire:model="video">
        @error('video') <span class="error">{{ $message }}</span> @enderror

        <label for="title">Titulo</label>
        <input type="text" id="title" wire:model="title">
        @error('title') <span class="error">{{ $message }}</span> @enderror

        <label for="difficultyLevel">Selecione o nivel de dificuldade</label>
        <select name="difficultyLevel" id="difficultyLevel" wire:model="difficultyLevel">
            <option value="1" default>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>

        <button type="submit">Cria</button>
    </form>

    <h3>Cartões Disponiveis</h3>
    @foreach($cards as $key)
        <div>
            <video autoplay loop preload="auto"><source src="{{asset($key->url_video)}}"></video>
            <h3>{{$key->title}}</h3>
            <h3>{{$key->difficulty_level}}</h3>
            <button wire:click="destroy({{$key->getId()}})">Deletar</button>    
        </div>
    @endforeach
</div>
