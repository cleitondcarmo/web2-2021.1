@extends('layouts.main')

@section('titulo','Cadastro de venda')

@section('conteudo')
<div id="form" class="stylecrud">

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('vendastore')}}" method="post">
        @csrf
        <label for="valor">Valor</label>
        <input type="text" name="valor" id="valor">
        <label for="idcliente">ID cliente</label>
        <input type="text" name="idcliente" id="idcliente">

        <div>
            <button name="alterar" type="submit" class="btn btn-primary" style="margin-top: 10px">Cadastrar</button>
        </div>
    </form>
</div>
@endsection('conteudo')
