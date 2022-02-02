<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class VendaController extends Controller
{
    public function listavenda(){
        $venda = venda::all();

        return view('venda.listavenda',['venda'=>$venda]);
    }

    public function show($id){
        $venda = Venda::find($id);

        if($venda){
            echo "<p> a venda é $venda</p>";
        }

        echo "<h1>pertence a cliente</h1>";
        $cliente = $venda->cliente()->first();

        if($cliente){
            echo $cliente->nome;
        }
    }

    public function create(){
        return view('venda.create');
    }

    public function store(Request $request){

        $request->validate([
            'valor' => 'required',
            'idcliente' => 'required',
        ]);

        $venda = new Venda();
        $venda->valor = $request->valor;
        $venda->idcliente = $request->idcliente;
        $venda->save();

        return redirect('venda/listavenda');
    }

    public function edit($id){
        $venda = Venda::find($id);
        return view('venda.edit', ['venda'=>$venda]);
    }

    public function update(Request $request){
        Venda::find($request->id)->update($request->except('_method'));
        return redirect('venda/listavenda')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        Venda::findOrFail($id)->delete();
        return redirect('venda/listavenda')->with('msg', 'Cadastro apagado');
    }
}
