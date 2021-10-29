@extends('layouts.main')

@section('titulo','Cadastro de itensvenda')

@section('conteudo')
<div id="form">
    <form action="{{route('vendastore')}}" method="post">
        @csrf
        <label for="valor">Valor</label>
        <input type="text" name="valor" id="valor">
        {{$idcliente}}
        <input type="hidden" name="idcliente" value={{$idcliente}}>
        <input type="submit" value="Cadastrar">
    </form>
</div>
@endsection('conteudo')
