@extends('layouts.main')
@section('title')
@section('content')
    {{$admin}}
    @foreach($participatingPlayers as $key)
        <h2>{{$key->getNickname()}}</h2>
        <p>{{$key->score}}</p>
    @endforeach
@endsection