<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function listaproduto(){
        $produtos = Produto::all();

        return view('produto.listaproduto',['produtos'=>$produtos]);
    }

    public function create(){
        return view('produto.produtocreate');
    }

    public function store(Request $request){

        $request->validate([
            'nome' => 'required',
            'valordecompra' => 'required',
            'valordevenda' => 'required',
            'desconto' => 'required',
            'frete' => 'required',
            'quantidade' => 'required',
        ]);

        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->valordecompra = $request->valordecompra;
        $produto->valordevenda = $request->valordevenda;
        $produto->desconto = $request->desconto;
        $produto->frete = $request->frete;
        $produto->quantidade = $request->quantidade;

        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $requestImagem = $request->imagem;
            $extension = $requestImagem->extension();

            $imagemName = md5($requestImagem->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $request->imagem->move(public_path(route('imgproduto')), $imagemName);
            $produto->imagem = $imagemName;
        }

        $produto->save();
        return redirect(route('listaproduto'))->with('msg', 'Cadastro realizado com sucesso');
    }

    public function show($id){
        if($id){
            $produto = Produto::where('id',$id)->get();
        }
        else{
            $produto = Produto::all();
        }
        return view('produto.produtoshow', ['produto'=>$produto]);
    }

    public function edit($id){
        $produto = Produto::find($id);
        return view('produto.produtoedit', ['produto'=>$produto]);
    }

    public function update(Request $request){
        Produto::find($request->id)->update($request->except('_method'));
        return redirect(route('listaproduto'))->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        Produto::findOrFail($id)->delete();
        return redirect(route('listaproduto'))->with('msg', 'Cadastro apagado');
    }
}

