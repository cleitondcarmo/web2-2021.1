<?php

#CLEITON APARECIDO DO CARMO SILVA

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //
    public function listacliente(){
        $clientes = Cliente::all();

        return view('clientes.listacliente',['clientes'=>$clientes]);
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(Request $request){
        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->debito = $request->debito;
        $cliente->endereco = $request->endereco;
        $cliente->save();
    }
}
