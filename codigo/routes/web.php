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

//Clientes
Route::get('/clientes/listacliente', [ClienteController::class, 'listacliente'])->name('listacliente');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientecreate');
Route::get('/clientes/show/{id}', [ClienteController::class, 'show'])->name('clienteshow');
Route::get('/clientes/edit/{id}', [ClienteController::class, 'edit'])->name('clienteedit');
Route::get('/clientes/showendereco/{id}', [ClienteController::class, 'show'])->name('showendereco');
Route::put('/clientes/update/{id}', [ClienteController::class, 'update'])->name('clientesupdate');
Route::post('/storecliente', [ClienteController::class, 'store'])->name('storecliente');
Route::delete('clientes/{id}', [ClienteController::class, 'destroy'])->name('delete');

//Fornecedor
Route::get('/fornecedor/listafornecedor', [FornecedorController::class, 'listafornecedor'])->name('listafornecedor');
Route::get('/fornecedor/show/{id}', [FornecedorController::class, 'show'])->name('fornecedorshow');
Route::get('/fornecedor/create', [FornecedorController::class, 'create'])->name('fornecedorcreate');
Route::get('/fornecedor/edit/{id}', [FornecedorController::class, 'edit'])->name('fornecedoredit');
Route::put('/fornecedor/update/{id}', [FornecedorController::class, 'update'])->name('fornecedorupdate');
Route::post('/storefornecedor', [FornecedorController::class, 'store'])->name('storefornecedor');
Route::delete('fornecedor/{id}', [FornecedorController::class, 'destroy'])->name('delete');

//Endereço
Route::get('/endereco/listaendereco', [EnderecoController::class, 'listaendereco'])->name('listaendereco');
Route::get('/endereco/show/{id}', [EnderecoController::class, 'show'])->name('enderecoshow');
Route::get('/endereco/create', [EnderecoController::class, 'create'])->name('enderecocreate');
Route::get('/endereco/edit/{id}', [EnderecoController::class, 'edit'])->name('enderecoedit');
Route::put('/endereco/update/{id}', [EnderecoController::class, 'update'])->name('enderecoupdate');
Route::post('/storeendereco', [EnderecoController::class, 'store'])->name('storeendereco');
Route::delete('endereco/{id}', [EnderecoController::class, 'destroy'])->name('delete');

//Entrada
Route::get('/entrada/listaentrada', [EntradaController::class, 'listaentrada'])->name('listaentrada');
Route::get('/entrada/show/{id}', [EntradaController::class, 'show'])->name('entradashow');
Route::get('/entrada/create', [EntradaController::class, 'create'])->name('entradacreate');
Route::get('/entrada/edit/{id}', [EntradaController::class, 'edit'])->name('entradaedit');
Route::put('/entrada/update/{id}', [EntradaController::class, 'update'])->name('entradaupdate');
Route::post('/entrada/store', [EntradaController::class, 'store'])->name('entradastore');
Route::delete('entrada/{id}', [EntradaController::class, 'destroy'])->name('delete');

//Itensvenda
Route::get('/itensvenda/listaitensvenda', [ItensvendaController::class, 'listaitensvenda'])->name('listaitensvenda');
Route::get('/itensvenda/show/{id}', [ItensvendaController::class, 'show'])->name('itensvendashow');
Route::get('/itensvenda/create', [ItensvendaController::class, 'create'])->name('itensvendacreate');
Route::get('/itensvenda/edit/{id}', [ItensvendaController::class, 'edit'])->name('itensvendaedit');
Route::put('/itensvenda/update/{id}', [ItensvendaController::class, 'update'])->name('itensvendaupdate');
Route::post('/itensvenda/store', [ItensvendaController::class, 'store'])->name('itensvendastore');
Route::delete('itensvenda/{id}', [ItensvendaController::class, 'destroy'])->name('delete');

//Itensentrada
Route::get('/itensentrada/listaitensentrada', [ItensentradaController::class, 'listaitensentrada'])->name('listaitensentrada');
Route::get('/itensentrada/show/{id}', [ItensentradaController::class, 'show'])->name('itensentradashow');
Route::get('/itensentrada/create', [ItensentradaController::class, 'create'])->name('itensentradacreate');
Route::get('/itensentrada/edit/{id}', [ItensentradaController::class, 'edit'])->name('itensentradaedit');
Route::put('/itensentrada/update/{id}', [ItensentradaController::class, 'update'])->name('itensentradaupdate');
Route::post('/itensentrada/store', [ItensentradaController::class, 'store'])->name('itensentradastore');
Route::delete('itensentrada/{id}', [ItensentradaController::class, 'destroy'])->name('delete');

//Produto
Route::get('/produto/show/{id}', [ProdutoController::class, 'show'])->name('produtoshow');
Route::get('/produto/create', [ProdutoController::class, 'create'])->name('produtocreate');
Route::get('/produto/listaproduto', [ProdutoController::class, 'listaproduto'])->name('listaproduto');
Route::get('/img/produto', [ProdutoController::class, 'imgproduto'])->name('imgproduto');
Route::get('/produto/edit/{id}', [ProdutoController::class, 'edit'])->name('produtoedit');
Route::put('/produto/update/{id}', [ProdutoController::class, 'update'])->name('produtoupdate');
Route::get('/produto/show/{id}', [ProdutoController::class, 'show'])->name('produtoshow');
Route::post('/produto/store', [ProdutoController::class, 'store'])->name('produtostore');

//Venda
Route::get('/venda/show/{id}', [VendaController::class, 'show'])->name('vendashow');
Route::get('/venda/create', [VendaController::class, 'create'])->name('vendacreate');
Route::post('/venda/store', [VendaController::class, 'store'])->name('vendastore');
Route::get('/venda/listavenda', [VendaController::class, 'listavenda'])->name('listavenda');
Route::get('/venda/edit/{id}', [VendaController::class, 'edit'])->name('vendaedit');
Route::get('/venda/showcliente', [VendaController::class, 'showcliente'])->name('showcliente');
Route::put('/venda/update/{id}', [VendaController::class, 'update'])->name('vendaupdate');

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/clientes', [ClienteController::class, 'show']);
Route::get('/fornecedor', [FornecedorController::class, 'show']);
