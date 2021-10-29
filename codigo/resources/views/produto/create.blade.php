@extends('layouts.main')

@section('titulo','Cadastro de produtos')

@section('conteudo')
<div id="form">
    <form action="{{route('produtostore')}}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="frete">Frete</label>
        <input type="text" name="frete" id="frete">
        <label for="valordecompra">Valor de compra</label>
        <input type="text" name="valordecompra" id="valordecompra">
        <label for="quantidade">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade">
        <label for="desconto">Desconto</label>
        <input type="text" name="desconto" id="desconto">
        <label for="valordevenda">Valor de venda</label>
        <input type="text" name="valordevenda" id="valordevenda">
        <input type="hidden" name="idproduto" value={{$idproduto}}>
        <input type="submit" value="Cadastrar">
    </form>
</div>
@endsection('conteudo')
