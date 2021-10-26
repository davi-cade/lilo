<div>
    <form wire:submit.prevent="submit">
        <input type="text" wire:keydown="valid" wire:model="nickname">
        @error('nickname') <span class="error">{{ $message }}</span> @enderror
        <button type="submit">Concluir</button>
    </form>
</div>
