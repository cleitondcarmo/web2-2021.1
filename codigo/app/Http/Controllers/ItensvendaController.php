<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\itensvenda;

class ItensvendaController extends Controller
{
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

    public function create($id){
        return view('itensvenda.create', ['idproduto'=>$id]) ('itensvenda.create', ['idvenda'=>$id]);
    }

    public function store(Request $request){
        $itensvenda = new itensvenda();
        $itensvenda->valorvenda = $request->valorvenda;
        $itensvenda->quantidade = $request->quantidade;
        $itensvenda->idproduto = $request->idproduto;
        $itensvenda->idvenda = $request->idvenda;
        $itensvenda->save();

        return redirect()->route('vendashow', ['id' => 5]);
    }
}
