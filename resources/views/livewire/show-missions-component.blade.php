<div>
    <h1>Missões</h1>
    @foreach($missions as $key)
        <div>
            <div>
                <h2>{{$key->getTitle()}}</h2>
                <p>{{$key->getDescription()}}</p>
                <p>Marcos: {{$key->type_landmark}}: {{$key->landmark}}</p>
                <p>Premeio: {{$key->type_reward}}: {{$key->reward}}</p>
                
            </div>
            <button wire:click="destroy({{$key->getId()}})">Deletar</button>
            <a href="{{url('/admin/missions/edit/$key->getId()')}}">Editar</a>
        </div>
    @endforeach
</div>
