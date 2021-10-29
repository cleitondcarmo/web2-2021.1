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

    public function show($id){
        if($id){
            $cliente = Cliente::where('id',$id)->get();
        }
        else{
            $cliente = Cliente::all();
        }
        return view('clientes.show', ['cliente'=>$cliente]);
    }

    public function edit($id){
        $cliente = Cliente::find($id);
        return view('clientes.edit', ['cliente'=>$cliente]);
    }

    public function update(Request $request){
        Cliente::find($request->id)->update($request->except('_method'));
        return redirect('clientes/listacliente')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        Cliente::findOrFail($id)->delete();
        return redirect('listacliente')->with('msg', 'Cadastro apagado');
    }

    public function showendereco(){
        $clientes = Cliente::all();

        foreach($clientes as $cliente){
            echo "<p>Cliente: $cliente->nome </p>";
            echo "<p>Debito: $cliente->debito </p>";

            $enderecos = $cliente->endereco()->get();

            if(count($enderecos)>0){
                echo "<h1>Endereço</h1>";
                foreach($enderecos as $endereco){
                    echo "<p>[$endereco->id , $endereco->logradouro]</p>";
                }
            }
            echo"<br>";
        }
    }

    public function showvenda(){
        $clientes = Cliente::all();

        foreach($clientes as $cliente){
            echo "<p>Cliente: $cliente->nome </p>";
            echo "<p>Debito: $cliente->debito </p>";

            $vendas = $cliente->venda()->get();

            if(count($vendas)>0){
                echo "<h1>Vendas</h1>";
                foreach($vendas as $venda){
                    echo "<p>[$venda->id , $venda->valor]</p>";
                }
            }
            echo"<br>";
        }
    }
}
