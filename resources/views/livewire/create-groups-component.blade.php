<div>
    <form wire:submit.prevent="submit"  enctype="multipart/form-data">
    @csrf
        @if ($image)
            <img src="{{ $image->temporaryUrl() }}"><br/>
        @endif

        <label for="image">Por favor, faça o upload da sua imagem</label>
        <input type="file" name="image" id="image" wire:model="image"><br/>
        @error('image') <span class="error">{{ $message }}</span> @enderror

        <label for="title">Titulo</label>
        <input type="text" id="title" wire:model="title"><br/>
        @error('title') <span class="error">{{ $message }}</span> @enderror

        <label for="title">Descrição</label>
        <input type="text" id="description" wire:model="description"><br/>
        @error('description') <span class="error">{{ $message }}</span> @enderror

        @if (count($players) > 0)
           <button type="submit">Concluir</button>
        @endif
    </form>
    <div>
        <h2>Jogadores selecionados:</h2>
        @foreach($players as $key)
            <div>
                <div>
                    {{$key['nickname']}}
                    {{$key['score']}}
                </div>
            </div>
        @endforeach
        <label for="player-search">Procure por um jogador:</label>
        <input type="text" name="player-search" id="player-search" wire:model="nickname" placeholder="Nickname">

        <h3>Resposta a pesquisa</h3>
        @foreach($allPlayers as $key)
        <div>
            <div>
                {{$key->nickname}}
                {{$key->score}}
            </div>
            <button wire:click="addPalyer({{$key}})">Adcionar</button>
        </div>
        @endforeach
       
    </div>
</div>



