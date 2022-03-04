@extends('layouts.main')

@section('title', 'Oficina Laravel - Cadastrar Produtos')

@section('content')

    <div id="produto-create-container" class="col-md-6 offset-md-3">
        <h1>Cadastrar um produto</h1>
        <form action="/produtos" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Produto:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do produto">
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade:</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade do produto">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" class="form-control"
                    placeholder="Descrição do produto"></textarea>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <textarea name="categoria" id="categoria" class="form-control" placeholder="Categoria do produto"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar produto">
        </form>
    </div>

@endsection
