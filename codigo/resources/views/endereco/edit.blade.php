@extends('layouts.main')

@section('titulo', 'Editar endereço')

@section('conteudo')
<div id="form" class="stylecrud">
    <form action="{{route('enderecoupdate', ['id' => $endereco->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">UF</label>
        <input type="text" name="uf" id="uf" value="{{$endereco->uf}}">
        <label for="">Cidade</label>
        <input type="text" name="cidade" id="cidade" value="{{$endereco->cidade}}">
        <label for="">Bairro</label>
        <input type="text" name="bairro" id="bairro" value="{{$endereco->bairro}}">
        <label for="">Logradouro</label>
        <input type="text" name="logradouro" id="logradouro" value="{{$endereco->logradouro}}">
        <label for="">Cliente</label>
        <input type="text" name="idcliente" id="idcliente" value="{{$endereco->idcliente}}">
        <div>
            <button name="alterar" type="submit" class="btn btn-warning" style="margin-top: 10px">Alterar</button>
        </div>
    </form>
</div>
@endsection('conteudo')
