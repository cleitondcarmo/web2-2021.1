<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Entrada;

class EntradaController extends Controller
{
    public function listaentrada(){
        $entrada = Entrada::all();

        return view('entrada.listaentrada',['entrada'=>$entrada]);
    }

    public function show($id){
        $entrada = Entrada::find($id);

        if($entrada){
            echo "<p> o entrada é $entrada</p>";
        }

        echo "<h1>pertence a fornecedor</h1>";
        $fornecedor = $entrada->fornecedor()->first();

        if($fornecedor){
            echo $fornecedor->nome;
        }
    }

    public function create(){
        return view('entrada.create') ;
    }

    public function store(Request $request){
        $request->validate([
            'valortotal' => 'required',
            'idfornecedor' => 'required',
        ]);

        $entrada = new entrada();
        $entrada->valortotal = $request->valortotal;
        $entrada->idfornecedor = $request->idfornecedor;
        $entrada->save();
    }

    public function edit($id){
        $entrada = Entrada::find($id);
        return view('entrada.edit', ['entrada'=>$entrada]);
    }

    public function update(Request $request){
        Entrada::find($request->id)->update($request->except('_method'));
        return redirect('entrada/listaentrada')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        Entrada::findOrFail($id)->delete();
        return redirect('entrada/listaentrada')->with('msg', 'Cadastro apagado');
    }
}
