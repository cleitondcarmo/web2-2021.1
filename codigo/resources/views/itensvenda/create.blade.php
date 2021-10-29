@extends('layouts.main')

@section('titulo','Cadastro de itensvenda')

@section('conteudo')
<div id="form">
    <form action="{{route('itensvendastore')}}" method="post">
        @csrf
        <label for="valorvenda">Valor venda</label>
        <input type="text" name="valorvenda" id="valorvenda">
        <label for="quantidade">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade">
        {{$idproduto}}
        {{$idvenda}}
        <input type="hidden" name="idproduto" value={{$idproduto}}>
        <input type="hidden" name="idvenda" value={{$idvenda}}>
        <input type="submit" value="Cadastrar">
    </form>
</div>
@endsection('conteudo')
