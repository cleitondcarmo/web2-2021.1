@extends('layouts.main')

@section('titulo','Cadastro de clientes')

@section('conteudo')
<div id="form"  class="stylecrud">
    <form action="{{route('itensentradastore')}}" method="post">
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

        @csrf
        <label for="quantidade">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade">
        <label for="precocompra">Preço de compra</label>
        <input type="text" name="precocompra" id="precocompra">
        <label for="unidade">Unidade</label>
        <input type="text" name="unidade" id="unidade">
        <label for="frete">Frete</label>
        <input type="text" name="frete" id="frete">
        <label for="idproduto">ID Produto</label>
        <input type="text" name="idproduto" id="idproduto">
        <label for="identrada">ID Entrada</label>
        <input type="text" name="identrada" id="identrada">

        <div>
            <button name="alterar" type="submit" class="btn btn-primary" style="margin-top: 10px">Cadastrar</button>
        </div>
    </form>
</div>
@endsection('conteudo')
