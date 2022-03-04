<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/contatos", function () {
    return view('contatos');
});

Route::get("/produtos", [ProdutosController::class, 'index']);

Route::get('/produtos/create', [ProdutosController::class, 'create']);

Route::get("/produtos/{id}", [ProdutosController::class, 'show']);

Route::delete('/produtos/{id}', [ProdutosController::class, 'destroy']);

Route::get('/produtos/edit/{id}', [ProdutosController::class, 'edit']);

Route::put('produtos/update/{id}', [ProdutosController::class, 'update']);

Route::post('/produtos', [ProdutosController::class, 'store']);
