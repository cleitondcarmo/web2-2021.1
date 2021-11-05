<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itensentrada;

class ItensentradaController extends Controller
{
    public function listaitensentrada(){
        $itensentrada = Itensentrada::all();

        return view('itensentrada.listaitensentrada',['itensentrada'=>$itensentrada]);
    }

    public function create(){
        return view('itensentrada.create');
    }

    public function show($id){
        $itensentrada = Itensentrada::find($id);

        if($itensentrada){
            echo "<p> o itensentrada é $itensentrada</p>";
        }

        echo "<h1>pertence a produto</h1>";
        $produto = $itensentrada->produto()->first();

        if($produto){
            echo $produto->nome;
        }
        echo "<h1>pertence a entrada</h1>";
        $entrada = $itensentrada->entrada()->first();

        if($entrada){
            echo $entrada->id;
        }
    }

    public function store(Request $request){
        $request->validate([
            'precocompra' => 'required',
            'quantidade' => 'required',
            'unidade' => 'required',
            'frete' => 'required',
            'idproduto' => 'required',
            'identrada' => 'required',
        ]);

        $itensentrada = new itensentrada();
        $itensentrada->precocompra = $request->precocompra;
        $itensentrada->quantidade = $request->quantidade;
        $itensentrada->unidade = $request->unidade;
        $itensentrada->frete = $request->frete;
        $itensentrada->idproduto = $request->idproduto;
        $itensentrada->identrada = $request->identrada;
        $itensentrada->save();
    }

    public function edit($id){
        $itensentrada = Itensentrada::find($id);
        return view('itensentrada.edit', ['itensentrada'=>$itensentrada]);
    }

    public function update(Request $request){
        Itensentrada::find($request->id)->update($request->except('_method'));
        return redirect('itensentrada/listaitensentrada')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        Itensentrada::findOrFail($id)->delete();
        return redirect('itensentrada/listaitensentrada')->with('msg', 'Cadastro apagado');
    }
}
