@extends('layouts.main')

@section('titulo','Cadastro de clientes')

@section('conteudo')
<div id="form">
    <form action="{{route('clientecreate')}}" method="post">
        @csrf
        <label for="">Nome clientes</label>
        <input type="text" name="nome" id="nome">
        <label for="">Debito</label>
        <input type="text" name="debito" id="debito">
        <label for="">Endereco</label>
        <input type="text" name="endereco" id="endereco">
        <input type="submit" value="cadastrar">
    </form>
</div>
@endsection('conteudo')
