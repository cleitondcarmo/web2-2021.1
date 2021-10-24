<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class VendaController extends Controller
{
    public function show($id){
        $venda = Venda::find($id);

        if($venda){
            echo "<p> o venda é $venda</p>";
        }

        echo "<h1>pertence a cliente</h1>";
        $cliente = $venda->cliente()->first();

        if($cliente){
            echo $cliente->nome;
        }
    }

    public function create($id){
        return view('venda.create', ['idcliente'=>$id]);
    }

    public function store(Request $request){
        $venda = new Venda();
        $venda->valor = $request->valor;
        $venda->idcliente = $request->idcliente;
        $venda->save();

        return redirect()->route('clienteshow', ['id' => 5]);
    }
}
