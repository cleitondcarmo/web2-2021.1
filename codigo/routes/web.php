<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ItensvendaController;
use App\Http\Controllers\ItensentradaController;

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
Route::get('/listacliente', [ClienteController::class, 'listacliente']);
Route::get('/listafornecedor', [FornecedorController::class, 'listafornecedor']);
Route::get('/createcliente', [ClienteController::class, 'create']);
Route::get('/createfornecedor', [FornecedorController::class, 'create']);
Route::post('/storecliente', [ClienteController::class, 'store'])->name('storecliente');
Route::post('/storefornecedor', [FornecedorController::class, 'store'])->name('storefornecedor');
Route::get('/clientes/show/{id}', [ClienteController::class, 'show'])->name('clientesshow');
Route::get('/clientes/edit/{id}', [ClienteController::class, 'edit'])->name('clientesedit');
Route::put('/clientes/update/{id}', [ClienteController::class, 'update'])->name('clientesupdate');
Route::delete('clientes/{id}', [ClienteController::class, 'destroy'])->name('delete');
Route::get('/clientes/showendereco', [ClienteController::class, 'showendereco']);
Route::get('/endereco/show/{id}', [EnderecoController::class, 'show'])->name('enderecoshow');
Route::get('/endereco/create/{id}', [EnderecoController::class, 'create'])->name('enderecocreate');
Route::post('/endereco/store', [EnderecoController::class, 'store'])->name('enderecostore');

Route::get('/entrada/show/{id}', [EntradaController::class, 'show'])->name('entradashow');
Route::get('/entrada/create/{id}', [EntradaController::class, 'create'])->name('entradacreate');
Route::post('/entrada/store', [EntradaController::class, 'store'])->name('entradastore');
Route::get('/itensvenda/show/{id}', [ItensvendaController::class, 'show'])->name('itensvendashow');
Route::get('/itensvenda/create/{id}', [ItensvendaController::class, 'create'])->name('itensvendacreate');
Route::post('/itensvenda/store', [ItensvendaController::class, 'store'])->name('itensvendastore');
Route::get('/itensentrada/show/{id}', [ItensentradaController::class, 'show'])->name('itensentradashow');
Route::get('/itensentrada/create/{id}', [ItensentradaController::class, 'create'])->name('itensentradacreate');
Route::post('/itensentrada/store', [ItensentradaController::class, 'store'])->name('itensentradastore');
Route::get('/produto/show/{id}', [ProdutoController::class, 'show'])->name('produtoshow');
Route::get('/produto/create/{id}', [ProdutoController::class, 'create'])->name('produtocreate');
Route::post('/produto/store', [ProdutoController::class, 'store'])->name('produtostore');
Route::get('/venda/show/{id}', [VendaController::class, 'show'])->name('vendashow');
Route::get('/venda/create/{id}', [VendaController::class, 'create'])->name('vendacreate');
Route::post('/venda/store', [VendaController::class, 'store'])->name('vendastore');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ClienteController::class, 'show']);
Route::get('/fornecedor', [FornecedorController::class, 'show']);
