@extends('layouts.main')
@section('title')
@section('content')
    {{$admin}}
    <a href="/chat/{{$key->getSlug()}}">chat</a>
    @foreach($participatingPlayers as $key)
        <h2>{{$key->getNickname()}}</h2>
        <p>{{$key->score}}</p>
    @endforeach
@endsection