<div>
    <h2>Lista de Administradores</h2>
    @foreach ($admins as $key)
        <div>
            <h3>{{$key->getName()}}</h3>
            <p>{{$key->getEmail()}}</p>
            <p>{{$key->getBirthDate()}}</p>
            @if($key->hasRole('administrator'))
                <p>Administrador</p>
                <button wire:click="riseToSuperadministrator({{$key->getId()}})">Promover a Superadministrador</button>
                <button wire:click="destroy({{$key->getId()}})">Deletar</button>
            @elseif($key->hasRole('superadministrator'))
                <p>Superadministrador</p>
            @endif
        </div>
    @endforeach
</div>
