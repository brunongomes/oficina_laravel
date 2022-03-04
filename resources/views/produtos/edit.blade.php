@extends('layouts.main')

@section('title', 'Editando: ' . $produto->nome)

@section('content')

    <div id="produto-edit-container" class="col-md-6 offset-md-3">
        <h1>Editando: {{ $produto->nome }}</h1>
        <form action="/produtos/update/{{ $produto->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do produto"
                    value="{{ $produto->nome }}">
            </div>

            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <textarea name="categoria" id="categoria" class="form-control" placeholder="Categoria do produto"
                    >{{ $produto->categoria }}</textarea>
            </div>

            <input type="submit" class="btn btn-primary" value="Editar produto">
        </form>
    </div>

@endsection
