@extends('layouts.main')

@section('titulo','Cadastro de itensvenda')

@section('conteudo')
<div id="form" class="stylecrud">
    <form action="{{route('itensvendastore')}}" method="post">
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
        <label for="valorvenda">Valor de venda</label>
        <input type="text" name="valorvenda" id="valorvenda">
        <label for="quantidade">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade">
        <label for="idproduto">ID Produto</label>
        <input type="text" name="idproduto" id="idproduto">
        <label for="idvenda">ID Venda</label>
        <input type="text" name="idvenda" id="idvenda">

        <div>
            <button name="alterar" type="submit" class="btn btn-primary" style="margin-top: 10px">Cadastrar</button>
        </div>
    </form>
</div>
@endsection('conteudo')
