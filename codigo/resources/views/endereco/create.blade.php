@extends('layouts.main')

@section('titulo','Adicionar endereço')

@section('conteudo')
<div>
    <form action="{{route('enderecostore')}}" method="post">
        @csrf
        <label for="logradouro">Logradouro</label>
        <input type="text" name="logradouro" id="logradouro">
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro">
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade">
        <label for="uf">UF</label>
        <input type="text" name="uf" id="uf">
        {{$idcliente}}
        <input type="hidden" name="idcliente" value={{$idcliente}}>
        <input type="submit" value="Cadastrar">
    </form>
</div>
@endsection('conteudo')
