@extends('layouts.main')

@section('title', 'Produtos - Oficina Laravel')

@section('content')
    <h1>Produtos cadastrados</h1>

    <p>Lista de produtos cadastrados...</p>

    <div class="col-md-10 offset-md-1 produtos-list-container">
        @if (count($produtos) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $produto)
                        <tr>
                            <td scropt="row">{{ $loop->index + 1 }}</td>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->quantidade }}</td>
                            <td>{{ $produto->categoria }}</td>
                            <td>
                                <form action="produtos/{{ $produto->id }}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">
                                        <ion-icon name="search-outline"></ion-icon> Detalhes
                                    </button>
                                </form>

                                <a href="/produtos/edit/{{ $produto->id }}" class="btn btn-info edit-btn">
                                    <ion-icon name="create-outline"></ion-icon> Editar
                                </a>

                                <form action="produtos/{{ $produto->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn">
                                        <ion-icon name="trash-outline"></ion-icon> Remover
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Não há produtos cadastrados, <a href="#">cadastrar produto</a></p>
        @endif

    @endsection
