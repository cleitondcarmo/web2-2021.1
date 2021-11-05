@extends('layouts.main')

@section('titulo', 'Editar produto')

@section('conteudo')
<div id="form"  class="stylecrud">
    <form action="{{route('produtoupdate', ['id' => $produto->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{$produto->nome}}">
        <label for="">Valor de compra:</label>
        <input type="text" name="valordecompra" id="valordecompra" value="{{$produto->valordecompra}}">
        <label for="">Valor de venda:</label>
        <input type="text" name="valordevenda" id="valordevenda" value="{{$produto->valordevenda}}">
        <label for="">Desconto:</label>
        <input type="text" name="desconto" id="desconto" value="{{$produto->desconto}}">
        <label for="">Frete:</label>
        <input type="text" name="frete" id="frete" value="{{$produto->frete}}">
        <label for="">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade" value="{{$produto->quantidade}}">
        <div>
            <button name="alterar" type="submit" class="btn btn-warning" style="margin-top: 10px">Alterar</button>
        </div>
    </form>
</div>
@endsection('conteudo')
