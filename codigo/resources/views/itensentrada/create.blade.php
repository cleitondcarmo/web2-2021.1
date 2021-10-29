@extends('layouts.main')

@section('titulo','Cadastro de clientes')

@section('conteudo')
<div id="form">
    <form action="{{route('itensentradastore')}}" method="post">
        @csrf
        <label for="precocompra">Preço compra</label>
        <input type="text" name="precocompra" id="precocompra">
        <label for="unidade">Unidade</label>
        <input type="text" name="unidade" id="unidade">
        <label for="quantidade">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade">
        <label for="frete">Frete</label>
        <input type="text" name="frete" id="frete">
        {{$identrada}}
        {{$idproduto}}
        <input type="hidden" name="identrada" value={{$identrada}}>
        <input type="hidden" name="idproduto" value={{$idproduto}}>
        <input type="submit" value="Cadastrar">
    </form>
</div>
@endsection('conteudo')
