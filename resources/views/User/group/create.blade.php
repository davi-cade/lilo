@extends('layouts.main')

@section('title', 'Criar Novo')

@section('content')

    <form method="POST" action="{{url('/grupos/store')}}">
        @csrf
        @if ($errors->any())
            <div style="color:red;">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="b"><h2>Criar novo Grupo</h2></div>
        <div class="input-group">
            <input id="name" name="name" type="text" placeholder="Nome do Grupo" require>
        </div>

        <div class="input-group">
            <input id="description" name="description" type="text" placeholder="Descrição">
        </div>
        <button>Criar</button>
    </form>

@endsection