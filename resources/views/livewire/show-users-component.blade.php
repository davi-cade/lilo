<div>
    @foreach($users as $key)
        <div>
            <div>
                <h2>Nome: {{$key->registe->getName()}}</h2>
                <p>Nickname: {{$key->nickname}}</p>
                <p>score: {{$key->score}}</p>
            </div>
            <button wire:click="destroy({{$key->registe->getId()}})">Delete</button>
        </div>
    @endforeach
</div>
