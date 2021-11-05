@extends('layouts.main')

@section('titulo', 'Editar Itensvenda')

@section('conteudo')
<div id="form" class="stylecrud">
    <form action="{{route('itensvendaupdate', ['id' => $itensvenda->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Valor de venda</label>
        <input type="text" name="valorvenda" id="valorvenda" value="{{$itensvenda->valorvenda}}">
        <label for="">quantidade</label>
        <input type="text" name="quantidade" id="quantidade" value="{{$itensvenda->quantidade}}">
        <label for="">ID Produto</label>
        <input type="text" name="idproduto" id="idproduto" value="{{$itensvenda->idproduto}}">
        <label for="">ID Venda</label>
        <input type="text" name="idvenda" id="idvenda" value="{{$itensvenda->idvenda}}">
        <div>
            <button name="alterar" type="submit" class="btn btn-warning" style="margin-top: 10px">Alterar</button>
        </div>
    </form>
</div>
@endsection('conteudo')
