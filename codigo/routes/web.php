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

//compras
Route::get('/compras/listacompras', [ComprasController::class, 'listacompras'])->name('listacompras');
Route::get('/compras/show/{id}', [ComprasController::class, 'show'])->name('comprasshow');
Route::get('/compras/create', [ComprasController::class, 'create'])->name('comprascreate');
Route::get('/compras/edit/{id}', [ComprasController::class, 'edit'])->name('comprasedit');
Route::put('/compras/update/{id}', [ComprasController::class, 'update'])->name('comprasupdate');
Route::post('/compras/store', [ComprasController::class, 'store'])->name('comprasstore');
Route::delete('compras/{id}', [ComprasController::class, 'destroy'])->name('delete');

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

//Finanças
Route::get('/financas/showfinancas', [FinancasController::class, 'showfinancas'])->name('showfinancas');

//Relatórios
Route::get('/relatorios/showrelatorios', [RelatoriosController::class, 'showrelatorios'])->name('showrelatorios');

//Dashboard
Route::get('/dashboard/showdashboard', [DashboardController::class, 'showdashboard'])->name('showdashboard');

Route::get('/', function () {
    return view('layouts.main');
});

