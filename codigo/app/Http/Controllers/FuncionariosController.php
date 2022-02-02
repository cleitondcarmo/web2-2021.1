<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionarios;

class FuncionariosController extends Controller
{
    public function listafuncionario(){
        $funcionarios = funcionarios::all();

        return view('funcionario.listafuncionario',['funcionarios'=>$funcionarios]);
    }

    public function create(){
        return view('funcionario.create');
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

        $funcionario = new funcionarios();
        $funcionario->nome = $request->nome;
        $funcionario->valordecompra = $request->valordecompra;
        $funcionario->valordevenda = $request->valordevenda;
        $funcionario->desconto = $request->desconto;
        $funcionario->frete = $request->frete;
        $funcionario->quantidade = $request->quantidade;

        $funcionario->save();
        return redirect(route('listafuncionario'))->with('msg', 'Cadastro realizado com sucesso');
    }

    public function show($id){
        if($id){
            $funcionario = funcionarios::where('id',$id)->get();
        }
        else{
            $funcionario = funcionarios::all();
        }
        return view('funcionario.show', ['funcionario'=>$funcionario]);
    }

    public function edit($id){
        $funcionario = funcionarios::find($id);
        return view('funcionario.edit', ['funcionario'=>$funcionario]);
    }

    public function update(Request $request){
        funcionarios::find($request->id)->update($request->except('_method'));
        return redirect(route('listafuncionario'))->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        funcionarios::findOrFail($id)->delete();
        return redirect(route('listafuncionario'))->with('msg', 'Cadastro apagado');
    }
}
