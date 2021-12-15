@extends('layouts.main')

@section('title', 'Módulos')

@section('content')

<a href="{{url('/admin/home')}}">Voltar</a>

    <form method="POST" action="{{url('/admin/module/publish')}}" enctype="multipart/form-data">
        @csrf
        <label for="image">Por favor, faça o upload da sua imagem</label>
        <input type="file" name="image" id="image"><br/>
        @error('image') <span class="error">{{ $message }}</span> @enderror

        <label for="title">Titulo</label>
        <input id="title" type="text" name="title" required><br/>
        @error('title') <span class="error">{{ $message }}</span> @enderror

        <label for="description">Descrição</label>
        <input id="description" type="text" name="description" required><br/>
        @error('description') <span class="error">{{ $message }}</span> @enderror
        <button>Publicar</button>
    </form>

    @livewire('App\Http\Livewire\ShowModulesComponent')

@endsection