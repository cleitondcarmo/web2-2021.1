<?php
#CLEITON APARECIDO DO CARMO SILVA

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    public function listafornecedor(){
        return view('fornecedor.listafornecedor');
    }
}
