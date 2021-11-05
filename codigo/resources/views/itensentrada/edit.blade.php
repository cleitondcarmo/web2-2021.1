@extends('layouts.main')

@section('titulo', 'Editar Itensentrada')

@section('conteudo')
<div id="form" class="stylecrud">
    <form action="{{route('itensentradaupdate', ['id' => $itensentrada->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade" value="{{$itensentrada->quantidade}}">
        <label for="">Preço de compra</label>
        <input type="text" name="precocompra" id="precocompra" value="{{$itensentrada->precocompra}}">
        <label for="">Unidade</label>
        <input type="text" name="unidade" id="unidade" value="{{$itensentrada->unidade}}">
        <label for="">frete</label>
        <input type="text" name="frete" id="frete" value="{{$itensentrada->frete}}">
        <label for="">ID Produto</label>
        <input type="text" name="idproduto" id="idproduto" value="{{$itensentrada->idproduto}}">
        <label for="">ID Entrada</label>
        <input type="text" name="identrada" id="identrada" value="{{$itensentrada->identrada}}">
        <div>
            <button name="alterar" type="submit" class="btn btn-warning" style="margin-top: 10px">Alterar</button>
        </div>
    </form>
</div>
@endsection('conteudo')
