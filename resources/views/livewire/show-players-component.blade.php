<div>
    <form wire:submit.prevent="submit">
        <input type="text" wire:model="title">
        @error('title') <span class="error">{{ $message }}</span> @enderror

        <input type="text" wire:model="description">
        @error('description') <span class="error">{{ $message }}</span> @enderror

        
        <button type="submit">Concluir</button>
    </form>
    <div>
        <input type="text" name="player-search" id="player-search" wire:model="nickname">

        @foreach($players as $key)
        <div>
            <div>
                {{$key->nickname}}
                {{$key->score}}
            </div>
            <button wire:click="add">Adcionar</button>
        </div>
        @endforeach
    </div>
</div>



