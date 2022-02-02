<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Endereco;

class EnderecoController extends Controller
{
    public function listaendereco()
    {
        $endereco = endereco::all();

        return view('endereco.listaendereco', ['endereco' => $endereco]);
    }

    public function show($id)
    {
        $endereco = Endereco::find($id);
        $cliente = $endereco->cliente()->first();

        if ($endereco) {
            if ($cliente) {
                echo $cliente->nome;
                echo $endereco->uf;
                echo $endereco->cidade;
            }
        }
    }

    public function create()
    {
        return view('endereco.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'logradouro' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'idcliente' => 'required',
        ]);

        $endereco = new endereco();
        $endereco->logradouro = $request->logradouro;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->uf = $request->uf;
        $endereco->idcliente = $request->idcliente;
        $endereco->save();

        return redirect()->route('clienteshow', ['id' => 5]);
    }

    public function edit($id)
    {
        $endereco = Endereco::find($id);
        return view('endereco.edit', ['endereco' => $endereco]);
    }

    public function update(Request $request)
    {
        Endereco::find($request->id)->update($request->except('_method'));
        return redirect(route('listaendereco'))->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id)
    {
        Endereco::findOrFail($id)->delete();
        return redirect(route('listaendereco'))->with('msg', 'Cadastro apagado');
    }
}
