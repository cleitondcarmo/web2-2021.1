<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Endereco;

class EnderecoController extends Controller
{
    public function show($id){
        $endereco = Endereco::find($id);

        if($endereco){
            echo "<p> o endereco é $endereco</p>";
        }

        echo "<h1>pertence a cliente</h1>";
        $cliente = $endereco->cliente()->first();

        if($cliente){
            echo $cliente->nome;
        }
    }

    public function create($id){
        return view('endereco.create', ['idcliente'=>$id]);
    }

    public function store(Request $request){
        $endereco = new endereco();
        $endereco->logradouro = $request->lograduro;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->uf = $request->uf;
        $endereco->idcliente = $request->idcliente;
        $endereco->save();

        return redirect()->route('clienteshow', ['id' => 5]);
    }
}
