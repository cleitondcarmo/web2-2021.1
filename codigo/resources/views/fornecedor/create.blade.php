@extends('layouts.main')

@section('titulo','Cadastro de clientes')

@section('conteudo')
<div>
    <form action="{{route('fornecedorcreate')}}" method="post">
        @csrf
        <label for="">Nome fornecedor</label>
        <input type="text" name="nome" id="nome">
        <label for="">Endereço</label>
        <input type="text" name="endereco" id="endereco">
        <label for="">E-mail</label>
        <input type="text" name="email" id="email">
        <input type="submit" value="cadastrar">
    </form>
</div>
@endsection('conteudo')

