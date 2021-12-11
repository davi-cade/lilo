@extends('layouts.main')

@section('title', 'Publicar Módulos')

@section('content')

    <h1>Publicar</h1>

    <form method="POST" action="{{url('/admin/module/publish')}}">
        @csrf

        <label for="title">Titulo</label>
        <input id="title" type="text" name="title" required>
        @error('title') <span class="error">{{ $message }}</span> @enderror

        <label for="description">Descrição</label>
        <input id="description" type="text" name="description" required>
        @error('description') <span class="error">{{ $message }}</span> @enderror

        <button>Publicar</button>

    </form>

@endsection
