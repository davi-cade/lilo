
<div>

<form wire:submit.prevent="submit">
                    
                    <input type="text" wire:keydown="valid" wire:model="nickname" class="inp" placeholder="Nickname">
                    @error('nickname') <span class="error">{{ $message }}</span> @enderror
                    <button class="btn1" type="submit">Concluir</button>
                </form>

</div>

