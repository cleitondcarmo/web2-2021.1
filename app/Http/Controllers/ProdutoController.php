<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function listaproduto(){
        $produtos = Produto::all();

        return view('produtos.listaproduto',['produtos'=>$produtos]);
    }

    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->valordecompra = $request->valordecompra;
        $produto->valordevenda = $request->valordevenda;
        $produto->desconto = $request->desconto;
        $produto->frete = $request->frete;
        $produto->quantidade = $request->quantidade;
        $produto->save();
    }

    public function show($id){
        if($id){
            $produto = Produto::where('id',$id)->get();
        }
        else{
            $produto = Produto::all();
        }
        return view('produtos.show', ['produtos'=>$produto]);
    }

    public function edit($id){
        $produto = Produto::find($id);
        return view('produtos.edit', ['produto'=>$produto]);
    }

    public function update(Request $request){
        Produto::find($request->id)->update($request->except('_method'));
        return redirect('listaproduto')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        Produto::findOrFail($id)->delete();
        return redirect('listaproduto')->with('msg', 'Cadastro apagado');
    }
}
