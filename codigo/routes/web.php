<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ItensvendaController;
use App\Http\Controllers\ItensentradaController;
use App\Http\Controllers\FinancasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\RelatoriosController;

//Clientes
Route::group(['prefix' => 'clientes'], function(){
    Route::get('/listacliente', [ClienteController::class, 'listacliente'])->name('listacliente');
    Route::get('/create', [ClienteController::class, 'create'])->name('clientecreate');
    Route::get('/show/{id}', [ClienteController::class, 'show'])->name('clienteshow');
    Route::get('/edit/{id}', [ClienteController::class, 'edit'])->name('clienteedit');
    Route::get('/showendereco/{id}', [ClienteController::class, 'show'])->name('showendereco');
    Route::put('/update/{id}', [ClienteController::class, 'update'])->name('clientesupdate');
    Route::post('/storecliente', [ClienteController::class, 'store'])->name('storecliente');
    Route::delete('clientes/{id}', [ClienteController::class, 'destroy'])->name('delete');
});

//Fornecedor
Route::group(['prefix' => 'fornecedor'], function(){
    Route::get('/listafornecedor', [FornecedorController::class, 'listafornecedor'])->name('listafornecedor');
    Route::get('/show/{id}', [FornecedorController::class, 'show'])->name('fornecedorshow');
    Route::get('/create', [FornecedorController::class, 'create'])->name('fornecedorcreate');
    Route::get('/edit/{id}', [FornecedorController::class, 'edit'])->name('fornecedoredit');
    Route::put('/update/{id}', [FornecedorController::class, 'update'])->name('fornecedorupdate');
    Route::post('/storefornecedor', [FornecedorController::class, 'store'])->name('storefornecedor');
    Route::delete('fornecedor/{id}', [FornecedorController::class, 'destroy'])->name('delete');
});

//Endereço
Route::group(['prefix' => 'endereco'], function(){
    Route::get('/listaendereco', [EnderecoController::class, 'listaendereco'])->name('listaendereco');
    Route::get('/show/{id}', [EnderecoController::class, 'show'])->name('enderecoshow');
    Route::get('/create', [EnderecoController::class, 'create'])->name('enderecocreate');
    Route::get('/edit/{id}', [EnderecoController::class, 'edit'])->name('enderecoedit');
    Route::put('/update/{id}', [EnderecoController::class, 'update'])->name('enderecoupdate');
    Route::post('/storeendereco', [EnderecoController::class, 'store'])->name('storeendereco');
    Route::delete('endereco/{id}', [EnderecoController::class, 'destroy'])->name('delete');
});

//compras
Route::group(['prefix' => 'compras'], function(){
    Route::get('listacompras', [ComprasController::class, 'listacompras'])->name('listacompras');
    Route::get('show/{id}', [ComprasController::class, 'show'])->name('comprasshow');
    Route::get('create', [ComprasController::class, 'create'])->name('comprascreate');
    Route::get('edit/{id}', [ComprasController::class, 'edit'])->name('comprasedit');
    Route::put('update/{id}', [ComprasController::class, 'update'])->name('comprasupdate');
    Route::post('store', [ComprasController::class, 'store'])->name('comprasstore');
    Route::delete('compras/{id}', [ComprasController::class, 'destroy'])->name('delete');
});

//Itensvenda
Route::group(['prefix' => 'itensvenda'], function(){
    Route::get('/listaitensvenda', [ItensvendaController::class, 'listaitensvenda'])->name('listaitensvenda');
    Route::get('/show/{id}', [ItensvendaController::class, 'show'])->name('itensvendashow');
    Route::get('/create', [ItensvendaController::class, 'create'])->name('itensvendacreate');
    Route::get('/edit/{id}', [ItensvendaController::class, 'edit'])->name('itensvendaedit');
    Route::put('/update/{id}', [ItensvendaController::class, 'update'])->name('itensvendaupdate');
    Route::post('/store', [ItensvendaController::class, 'store'])->name('itensvendastore');
    Route::delete('itensvenda/{id}', [ItensvendaController::class, 'destroy'])->name('delete');
});

//Itensentrada
Route::group(['prefix' => 'itensentrada'], function(){
    Route::get('/listaitensentrada', [ItensentradaController::class, 'listaitensentrada'])->name('listaitensentrada');
    Route::get('/show/{id}', [ItensentradaController::class, 'show'])->name('itensentradashow');
    Route::get('/create', [ItensentradaController::class, 'create'])->name('itensentradacreate');
    Route::get('/edit/{id}', [ItensentradaController::class, 'edit'])->name('itensentradaedit');
    Route::put('/update/{id}', [ItensentradaController::class, 'update'])->name('itensentradaupdate');
    Route::post('/store', [ItensentradaController::class, 'store'])->name('itensentradastore');
    Route::delete('itensentrada/{id}', [ItensentradaController::class, 'destroy'])->name('delete');
});

//Produto
Route::group(['prefix' => 'produto'], function(){
    Route::get('/show/{id}', [ProdutoController::class, 'show'])->name('produtoshow');
    Route::get('/create', [ProdutoController::class, 'create'])->name('produtocreate');
    Route::get('/listaproduto', [ProdutoController::class, 'listaproduto'])->name('listaproduto');
    Route::get('/edit/{id}', [ProdutoController::class, 'edit'])->name('produtoedit');
    Route::put('/update/{id}', [ProdutoController::class, 'update'])->name('produtoupdate');
    Route::get('/show/{id}', [ProdutoController::class, 'show'])->name('produtoshow');
    Route::post('/store', [ProdutoController::class, 'store'])->name('produtostore');
});

//Venda
Route::group(['prefix' => 'venda'], function(){
    Route::get('/show/{id}', [VendaController::class, 'show'])->name('vendashow');
    Route::get('/create', [VendaController::class, 'create'])->name('vendacreate');
    Route::post('/store', [VendaController::class, 'store'])->name('vendastore');
    Route::get('/listavenda', [VendaController::class, 'listavenda'])->name('listavenda');
    Route::get('/edit/{id}', [VendaController::class, 'edit'])->name('vendaedit');
    Route::get('/showcliente', [VendaController::class, 'showcliente'])->name('showcliente');
    Route::put('/update/{id}', [VendaController::class, 'update'])->name('vendaupdate');
});

//Categorias
Route::get('/categorias/listacategorias', [CategoriasController::class, 'listacategorias'])->name('listacategorias');
Route::get('/categorias/show/{id}', [CategoriasController::class, 'show'])->name('categoriasshow');
Route::get('/categorias/create', [CategoriasController::class, 'create'])->name('categoriascreate');
Route::get('/categorias/edit/{id}', [CategoriasController::class, 'edit'])->name('categoriasedit');
Route::put('/categorias/update/{id}', [CategoriasController::class, 'update'])->name('categoriasupdate');
Route::post('/categorias/store', [CategoriasController::class, 'store'])->name('categoriasstore');
Route::delete('categorias/{id}', [CategoriasController::class, 'destroy'])->name('delete');

//Funcionarios
Route::get('/funcionarios/show/{id}', [FuncionariosController::class, 'show'])->name('funcionariosshow');
Route::get('/funcionarios/create', [FuncionariosController::class, 'create'])->name('funcionarioscreate');
Route::get('/funcionarios/listafuncionarios', [FuncionariosController::class, 'listafuncionarios'])->name('listafuncionarios');
Route::get('/img/funcionarios', [FuncionariosController::class, 'imgfuncionarios'])->name('imgfuncionarios');
Route::get('/funcionarios/edit/{id}', [FuncionariosController::class, 'edit'])->name('funcionariosedit');
Route::put('/funcionarios/update/{id}', [FuncionariosController::class, 'update'])->name('funcionariosupdate');
Route::get('/funcionarios/show/{id}', [FuncionariosController::class, 'show'])->name('funcionariosshow');
Route::post('/funcionarios/store', [FuncionariosController::class, 'store'])->name('funcionariosstore');

//Categorias
Route::group(['prefix' => 'categorias'], function(){
    Route::get('/listacategorias', [CategoriasController::class, 'listacategorias'])->name('listacategorias');
    Route::get('/show/{id}', [CategoriasController::class, 'show'])->name('categoriasshow');
    Route::get('/create', [CategoriasController::class, 'create'])->name('categoriascreate');
    Route::get('/edit/{id}', [CategoriasController::class, 'edit'])->name('categoriasedit');
    Route::put('/update/{id}', [CategoriasController::class, 'update'])->name('categoriasupdate');
    Route::post('/store', [CategoriasController::class, 'store'])->name('categoriasstore');
    Route::delete('categorias/{id}', [CategoriasController::class, 'destroy'])->name('delete');
});

//Funcionarios
Route::group(['prefix' => 'funcionarios'], function(){
    Route::get('/funcionarios/show/{id}', [FuncionariosController::class, 'show'])->name('funcionariosshow');
    Route::get('/funcionarios/create', [FuncionariosController::class, 'create'])->name('funcionarioscreate');
    Route::get('/funcionarios/listafuncionarios', [FuncionariosController::class, 'listafuncionarios'])->name('listafuncionarios');
    Route::get('/img/funcionarios', [FuncionariosController::class, 'imgfuncionarios'])->name('imgfuncionarios');
    Route::get('/funcionarios/edit/{id}', [FuncionariosController::class, 'edit'])->name('funcionariosedit');
    Route::put('/funcionarios/update/{id}', [FuncionariosController::class, 'update'])->name('funcionariosupdate');
    Route::get('/funcionarios/show/{id}', [FuncionariosController::class, 'show'])->name('funcionariosshow');
    Route::post('/funcionarios/store', [FuncionariosController::class, 'store'])->name('funcionariosstore');
});

//Finanças
Route::get('/financas/showfinancas', [FinancasController::class, 'showfinancas'])->name('showfinancas');

//Relatórios
Route::get('/relatorios/showrelatorios', [RelatoriosController::class, 'showrelatorios'])->name('showrelatorios');

//Dashboard
Route::get('/dashboard/showdashboard', [DashboardController::class, 'showdashboard'])->name('showdashboard');

Route::get('img/produto', [ProdutoController::class, 'imgproduto'])->name('imgproduto');

Route::get('/', function () {
    return view('layouts.main');
});

