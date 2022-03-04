@extends('layouts.main')

@section('title', 'Detalhes de produto')

@section('content')

    <h1>{{ $produto->nome }}</h1>
    <p>{{ $produto->quantidade }}</p>
    <p>{{ $produto->descricao }}</p>
    <p>{{ $produto->categoria }}</p>

@endsection
