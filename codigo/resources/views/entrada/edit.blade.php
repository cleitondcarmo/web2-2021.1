@extends('layouts.main')

@section('titulo', 'Editar endereço')

@section('conteudo')
<div id="form" class="stylecrud">
    <form action="{{route('entradaupdate', ['id' => $entrada->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Valor total</label>
        <input type="text" name="valortotal" id="valortotal" value="{{$entrada->valortotal}}">
        <label for="">ID Fornecedor</label>
        <input type="text" name="idfornecedor" id="idfornecedor" value="{{$entrada->idfornecedor}}">
        <div>
            <button name="alterar" type="submit" class="btn btn-warning" style="margin-top: 10px">Alterar</button>
        </div>
    </form>
</div>
@endsection('conteudo')
