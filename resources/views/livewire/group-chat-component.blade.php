<div>
    <div>
        @foreach($message as $key)
            <div>
                <div>
                    <h2>{{$key->sender->getNickname()}}</h2>                  
                </div>
                <p>{{$key->getMessage()}}</p>
            </div>
        @endforeach
    </div>
    <form wire:submit.prevent="send">
        <input type="text" name="message" id="message">
        <button type="submit">Enviar</button>
    </form>
</div>
