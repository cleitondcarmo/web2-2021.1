@extends('layouts.main')

@section('titulo', 'Editar Itensvenda')

@section('conteudo')
<div>
    <form action="{{route('itensvendavender', [$id])}}" method="post">
        @csrf
        <div class="form-group">
            <label for="valorvenda">Valorvenda:</label>
            <input type="text" name="valorvenda" class="form-control" id="valorvenda">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="text" name="quantidade" class="form-control" id="quantidade">
        </div>
        <div class="form-group">
            <label for="idvenda">idvenda:</label>
            <input type="text" name="idvenda" class="form-control" id="idvenda">
        </div>
        <div>
            <button type="submit" class="btn btn-primary" style="margin-top: 10px">Cadastrar</button>
        </div>
    </form>
</div>

@endsection('conteudo')
