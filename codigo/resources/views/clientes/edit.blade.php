@extends('layouts.main')

@section('titulo', 'Editar cliente')

@section('conteudo')
<div id="form">
    <form action="{{route('clientesupdate', ['id' => $cliente->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Cliente:</label>
        <input type="text" name="nome" id="nome" value="{{$cliente->nome}}">
        <label for="">Debito:</label>
        <input type="text" name="debito" id="debito" value="{{$cliente->debito}}">
        <input type="submit" value="alterar">
    </form>
</div>
@endsection('conteudo')
