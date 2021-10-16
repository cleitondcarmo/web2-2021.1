<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;

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
Route::post('/storecliente', [ClienteController::class, 'store']);
Route::post('/storefornecedor', [FornecedorController::class, 'store']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ClienteController::class, 'show']);
Route::get('/fornecedor', [FornecedorController::class, 'show']);
