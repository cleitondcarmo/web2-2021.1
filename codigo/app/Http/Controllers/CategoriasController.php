<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;

class CategoriasController extends Controller
{
    public function listacategorias(){
        $categoria = categorias::all();

        return view('categoria.listacategoria',['categoria'=>$categoria]);
    }

    public function create(){
        return view('categoria.create');
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

        $categoria = new categorias();
        $categoria->nome = $request->nome;
        $categoria->valordecompra = $request->valordecompra;
        $categoria->valordevenda = $request->valordevenda;
        $categoria->desconto = $request->desconto;
        $categoria->frete = $request->frete;
        $categoria->quantidade = $request->quantidade;

        $categoria->save();
        return redirect(route('listacategoria'))->with('msg', 'Cadastro realizado com sucesso');
    }

    public function show($id){
        if($id){
            $categoria = categorias::where('id',$id)->get();
        }
        else{
            $categoria = categorias::all();
        }
        return view('categoria.show', ['categoria'=>$categoria]);
    }

    public function edit($id){
        $categoria = categorias::find($id);
        return view('categoria.edit', ['categoria'=>$categoria]);
    }

    public function update(Request $request){
        categorias::find($request->id)->update($request->except('_method'));
        return redirect(route('listacategoria'))->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        categorias::findOrFail($id)->delete();
        return redirect(route('listacategoria'))->with('msg', 'Cadastro apagado');
    }
}
