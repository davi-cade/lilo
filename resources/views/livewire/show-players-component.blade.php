<div>
    <form wire:submit.prevent="submit">
        <label for="title">Titulo</label>
        <input type="text" id="title" wire:model="title">
        @error('title') <span class="error">{{ $message }}</span> @enderror

        <label for="title">Descrição</label>
        <input type="text" id="description" wire:model="description">
        @error('description') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Concluir</button>
    </form>
    <div> 
        @foreach($players as $key)
            <div>
                <div>
                    {{$key['nickname']}}
                    {{$key['score']}}
                </div>
            </div>
        @endforeach
        <input type="text" name="player-search" id="player-search" wire:model="nickname" placeholder="Nickname">

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



