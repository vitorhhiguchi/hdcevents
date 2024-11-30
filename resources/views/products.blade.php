@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
<h1>Tela de produtos</h1>

<p>Produto 1</p>
<p>Produto 2</p>
<p>Produto 3</p>
<p>Produto 4</p>


@if ($busca != '')
    <p>O usuario esta buscando por {{$busca}}</p>
@endif

<a href="/">Voltar para a home</a>
@endsection
