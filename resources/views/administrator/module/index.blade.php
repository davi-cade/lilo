@extends('layouts.main')

@section('title', 'Módulos')

@section('content')

<div>
    <a href="{{url('/module/create')}}">Cadastrar novo Módulo</a>
</div>

<div>
    <p>Número de Módulos: {{$totalNumberModules}}</p>
    @foreach ($modules as $module)
        <div class="m-11 bg-green-500 max-w-7xl">
            <h3>{{$module->title}}</h3>
            <p>{{$module->description}}</p>
            <p>{{$module->getCreationDate()}}</p>
            <a href="/module/{{$module->getSlug()}}">ver</a>
        </div>
    @endforeach
</div>

@endsection