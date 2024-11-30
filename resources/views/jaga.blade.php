@extends('layouts.main')

@section('title', 'Jagas')

@section('content')

@if ($id != null)
    <p>O usuario esta fazendo uma requisição: {{$id}}</p>
@endif


@endsection
