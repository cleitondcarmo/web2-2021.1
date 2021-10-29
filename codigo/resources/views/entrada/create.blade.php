@extends('layouts.main')

@section('titulo', 'Entrada de produtos')

@section('conteudo')
<div>
    <form action="{{route('entradastore')}}" method="post">
        @csrf
        <label for="valortotal">Valor total</label>
        <input type="text" name="valortotal" id="valortotal">
        {{$idfornecedor}}
        <input type="hidden" name="idfornecedor" value={{$idfornecedor}}>
        <input type="submit" value="Cadastrar">
    </form>
</div>
@endsection('conteudo')
