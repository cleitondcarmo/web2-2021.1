@extends('layouts.main')

@section('titulo', 'Editar fornecedor')

@section('conteudo')
<div id="form" class="stylecrud">
    <form action="{{route('fornecedorupdate', ['id' => $fornecedor->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome</label>
        <input type="text" name="nome" id="nome" value="{{$fornecedor->nome}}">
        <label for="">Endereço</label>
        <input type="text" name="endereco" id="endereco" value="{{$fornecedor->endereco}}">
        <label for="">E-mail</label>
        <input type="text" name="email" id="email" value="{{$fornecedor->email}}">
        <div>
            <button name="alterar" type="submit" class="btn btn-warning" style="margin-top: 10px">Alterar</button>
        </div>
    </form>
</div>
@endsection('conteudo')
