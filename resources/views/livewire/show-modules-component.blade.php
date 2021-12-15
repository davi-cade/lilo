<div>
<h1>Módulos</h1>
    @foreach($modules as $key)
        <div>
            <div>
                <h2>{{$key->getTitle()}}</h2>
                <p>{{$key->getDescription()}}</p>
                
            </div>
            <a href="/admin/module/{{$key->getSlug()}}">Ver</a>
            <button wire:click="destroy({{$key->getId()}})">Deletar</button>
        </div>
    @endforeach
</div>
