@extends('layouts.main')

@section('titulo', 'Editar venda')

@section('conteudo')
<div id="form"  class="stylecrud">
    <form action="{{route('vendaupdate', ['id' => $venda->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Valor</label>
        <input type="text" name="valor" id="valor" value="{{$venda->valor}}">
        <label for="">Cliente</label>
        <input type="text" name="idcliente" id="idcliente" value="{{$venda->idcliente}}">
        <div>
            <button name="alterar" type="submit" class="btn btn-warning" style="margin-top: 10px">Alterar</button>
        </div>
    </form>
</div>
@endsection('conteudo')
