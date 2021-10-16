<?php
#CLEITON APARECIDO DO CARMO SILVA

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    public function listafornecedor(){
        $fornecedor = Fornecedor::all();

        return view('fornecedor.listafornecedor',['fornecedor'=>$fornecedor]);
    }

    public function create(){
        return view('fornecedor.create');
    }

    public function store(Request $request){
        $Fornecedores = new Fornecedor();
        $Fornecedores->nome = $request->nome;
        $Fornecedores->endereco = $request->endereco;
        $Fornecedores->email = $request->email;
        $Fornecedores->save();
    }
}
