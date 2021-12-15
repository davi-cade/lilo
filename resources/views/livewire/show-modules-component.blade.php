<div>
<h3>Módulos</h3>
    @foreach($modules as $key)
        <div>
            <div>
                <h2>{{$key->getTitle()}}</h2>
                <p>{{$key->getDescription()}}</p>
            </div>
            <a href="/admin/module/{{$key->getSlug()}}">Ver</a>
            <button wire:click="destroy({{$key}})">Deletar</button>
        </div>
    @endforeach
</div>
