<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itensentrada;

class ItensentradaController extends Controller
{
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

    public function create($id){
        return view('itensentrada.create', ['idproduto'=>$id]) ('itensentrada.create', ['idvenda'=>$id]);
    }

    public function store(Request $request){
        $itensentrada = new itensentrada();
        $itensentrada->precocompra = $request->precocompra;
        $itensentrada->quantidade = $request->quantidade;
        $itensentrada->unidade = $request->unidade;
        $itensentrada->frete = $request->frete;
        $itensentrada->idproduto = $request->idproduto;
        $itensentrada->identrada = $request->identrada;
        $itensentrada->save();

        return redirect()->route('entradashow', ['id' => 5]);
    }
}
