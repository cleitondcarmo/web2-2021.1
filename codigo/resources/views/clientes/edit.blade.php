@extends('layouts.main')

@section('titulo', 'Editar cliente')

@section('conteudo')
<div id="form" class="stylecrud">
    <form action="{{route('clientesupdate', ['id' => $cliente->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Cliente:</label>
        <input type="text" name="nome" id="nome" value="{{$cliente->nome}}">
        <label for="">Debito:</label>
        <input type="text" name="debito" id="debito" value="{{$cliente->debito}}">
        <div>
            <button name="alterar" type="submit" class="btn btn-warning" style="margin-top: 10px">Alterar</button>
        </div>
    </form>
</div>
@endsection('conteudo')
