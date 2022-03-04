<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos', ['produtos' => $produtos]);
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.show', ['produto' => $produto]);
    }

    public function store(Request $request)
    {
        $produto = new Produto();

        $produto->nome = $request->nome;
        $produto->quantidade = $request->quantidade;
        $produto->categoria = $request->categoria;
        $produto->descricao = $request->descricao;

        $produto->save();

        return redirect('/produtos');
    }

    public function destroy($id)
    {
        Produto::findOrFail($id)->delete();

        return redirect('/produtos');
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request)
    {
        Produto::findOrFail($request->id)->update($request->all());
        return redirect('/produtos');
    }
}
