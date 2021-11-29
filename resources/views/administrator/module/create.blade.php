@extends('layouts.main')

@section('title', 'Publicar Módulos')

@section('content')

    <h1>Publicar</h1>

    <form method="POST" action="{{url('/module/publish')}}">
        @csrf

        <!--<label for="avatar">Por favor, faça o upload da sua imagem</label>
        <input type="file" name="avatar" id="avatar"> enctype="multipart/form-data"-->

        <label for="title">Titulo</label>
        <input id="title" type="text" name="title" required>
        @error('title') <span class="error">{{ $message }}</span> @enderror

        <label for="description">Descrição</label>
        <input id="description" type="text" name="description" required>
        @error('description') <span class="error">{{ $message }}</span> @enderror

@endsection
