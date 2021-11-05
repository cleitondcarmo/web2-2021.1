@extends('layouts.main')

@section('titulo', 'Mostrar produtos')

@section('conteudo')
<div class="styleshow">
    @foreach ($produto as $produto)
    <div>
        <img src="{{route('imgproduto')}}/{{ $produto->imagem }}">
    </div>
    <div style="margin: 10px">
        <td> Nome </td></br>
        <td> Quantidade </td></br>
        <td> Cadastrado </td></br>
        <td> Última atualização </td></br>
        <td> Valor de compra </td></br>
        <td> Valor de venda </td></br>
        <td> Desconto </td></br>
        <td> Frete </td></br>
    </div>
    <div>
        <td> <?php echo $produto->nome; ?> </td></br>
        <td> <?php echo $produto->quantidade; ?> </td></br>
        <td> <?php echo $produto->created_at; ?> </td></br>
        <td> <?php echo $produto->updated_at; ?> </td></br>
        <td> <?php echo $produto->valordecompra; ?> </td></br>
        <td> <?php echo $produto->valordevenda; ?> </td></br>
        <td> <?php echo $produto->desconto; ?> </td></br>
        <td> <?php echo $produto->frete; ?> </td></br>
    </div>
    @endforeach
</div>
@endsection('conteudo')
