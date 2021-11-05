@extends('layouts.main')

@section('titulo','Cadastro de produtos')

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

    <form action="{{route('produtostore')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="frete">Frete</label>
        <input type="text" name="frete" id="frete">
        <label for="valordecompra">Valor de compra</label>
        <input type="text" name="valordecompra" id="valordecompra">
        <label for="quantidade">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade">
        <label for="desconto">Desconto</label>
        <input type="text" name="desconto" id="desconto">
        <label for="valordevenda">Valor de venda</label>
        <input type="text" name="valordevenda" id="valordevenda">
        <label for="imagem">Imagem</label>
        <input type="file" id="imagem" name="imagem" class="form-control-file"></input>
        <input type="hidden" name="idproduto" value={{$idproduto ?? ''}}>
        <div>
            <button name="alterar" type="submit" class="btn btn-primary" style="margin-top: 10px">Cadastrar</button>
        </div>
    </form>
</div>
@endsection('conteudo')
