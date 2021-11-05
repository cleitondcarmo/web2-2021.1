<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\itensvenda;

class ItensvendaController extends Controller
{
    public function listaitensvenda(){
        $itensvenda = Itensvenda::all();

        return view('itensvenda.listaitensvenda',['itensvenda'=>$itensvenda]);
    }

    public function show($id){
        $itensvenda = Itensvenda::find($id);

        if($itensvenda){
            echo "<p> o itensvenda é $itensvenda</p>";
        }

        echo "<h1>pertence a produto</h1>";
        $produto = $itensvenda->produto()->first();

        if($produto){
            echo $produto->nome;
        }
        echo "<h1>pertence a venda</h1>";
        $venda = $itensvenda->venda()->first();

        if($venda){
            echo $venda->id;
        }
    }

    public function create(){
        return view('itensvenda.create');
    }

    public function store(Request $request){
        $request->validate([
            'valorvenda' => 'required',
            'quantidade' => 'required',
            'idproduto' => 'required',
            'idvenda' => 'required',
        ]);

        $itensvenda = new itensvenda();
        $itensvenda->valorvenda = $request->valorvenda;
        $itensvenda->quantidade = $request->quantidade;
        $itensvenda->idproduto = $request->idproduto;
        $itensvenda->idvenda = $request->idvenda;
        $itensvenda->save();

        return redirect('itensvenda/listaitensvenda')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function edit($id){
        $itensvenda = Itensvenda::find($id);
        return view('itensvenda.edit', ['itensvenda'=>$itensvenda]);
    }

    public function update(Request $request){
        Itensvenda::find($request->id)->update($request->except('_method'));
        return redirect('itensvenda/listaitensvenda')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        Itensvenda::findOrFail($id)->delete();
        return redirect('itensvenda/listaitensvenda')->with('msg', 'Cadastro apagado');
    }
}
