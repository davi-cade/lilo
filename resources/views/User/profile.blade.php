@extends('layouts.main')

@section('title', 'Perfil')

@section('content')
    <img src="{{asset(Auth::user()->directory->url_avatar)}}" alt="user-avatar">
    
    <form method="POST" action="{{url('/admin/register')}}">
        @csrf
        <div>
            <label for="name">Nome</label>
            <input id="name" type="text" name="name" value="{{$registe['name']}}" required autofocus />
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="surname">Sobrenome</label>
            <input id="surname" type="text" name="surname" value="{{$registe['surname']}}" required autofocus />
            @error('surname') <span class="error">{{ $message }}</span> @enderror
        </div>
    </form>

@endsection