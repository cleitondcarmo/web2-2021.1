<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Compras;

class ComprasController extends Controller
{
    public function listacompras(){
        $compras = Compras::all();

        return view('compras.listacompras',['compras'=>$compras]);
    }

    public function show($id){
        $compras = Compras::find($id);

        if($compras){
            echo "<p> o compras é $compras</p>";
        }

        echo "<h1>pertence a fornecedor</h1>";
        $fornecedor = $compras->fornecedor()->first();

        if($fornecedor){
            echo $fornecedor->nome;
        }
    }

    public function create(){
        return view('compras.create') ;
    }

    public function store(Request $request){
        $request->validate([
            'valortotal' => 'required',
            'idfornecedor' => 'required',
        ]);

        $compras = new compras();
        $compras->valortotal = $request->valortotal;
        $compras->idfornecedor = $request->idfornecedor;
        $compras->save();

        return redirect(route('listacompras'))->with('msg', 'Cadastro realizado com sucesso');
    }

    public function edit($id){
        $compras = compras::find($id);
        return view('compras.edit', ['compras'=>$compras]);
    }

    public function update(Request $request){
        compras::find($request->id)->update($request->except('_method'));
        return redirect(route('listacompras'))->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        compras::findOrFail($id)->delete();
        return redirect(route('listacompras'))->with('msg', 'Cadastro apagado');
    }
}

