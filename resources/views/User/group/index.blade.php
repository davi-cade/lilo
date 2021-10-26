@extends('layouts.main')

@section('title', 'Seus Grupos')

@section('content')
    <a href="{{url('/group/create')}}">Cria um grupo</a>
    <h2>Seus grupos</h2>
    @foreach($myGroups as $key)
        <h2>{{$key->getName()}}</h2>
        <p>{{$key->getDescription()}}</p>
        <div>
            <p>{{$key->getCreationDate()}}</p>
            <a href="/group/{{$key->getSlug()}}">ver</a>
        </div>
    @endforeach

    <h2>Grupos que você está participando</h2>
    @foreach($groups as $key)
        <h2>{{$key->getName()}}</h2>
        <p>{{$key->getDescription()}}</p>
        <div>
            <p>{{$key->getCreationDate()}}</p>
            <a href="/group/{{$key->getSlug()}}">ver</a>
        </div>
    @endforeach
@endsection