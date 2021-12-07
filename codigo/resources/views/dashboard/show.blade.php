@extends('layouts.main')

@section('titulo', 'Mostrar finanças')

@section('conteudo')
<div class="dashboard">
    <div id="um">
        <li>
            <img src="{{route('imgproduto')}}/DashBoard-title.png">
        </li>
    </div>
    <div id="dois">
        <li>
            <a href="{{route('listacliente')}}"><img src="{{route('imgproduto')}}/ClientesDash.png"></a>
        </li>
        <li>
            <a href="{{route('listaproduto')}}"><img src="{{route('imgproduto')}}/ProdutosDash.png"></a>
        </li>
        <li>
            <a href="{{route('listaproduto')}}"><img src="{{route('imgproduto')}}/CategoriasDash.png"></a>
        </li>
        <li>
            <a href="{{route('listavenda')}}"><img src="{{route('imgproduto')}}/VendasDash.png"></a>
        </li>
        <li>
            <a href="{{route('listacompras')}}"><img src="{{route('imgproduto')}}/ComprasDash.png"></a>
        </li>
        <li>
            <a href="{{route('listafornecedor')}}"><img src="{{route('imgproduto')}}/FornecedorDash.png"></a>
        </li>
        <li>
            <a href="{{route('showfinancas')}}"><img src="{{route('imgproduto')}}/FinancasDash.png"></a>
        </li>
        <li>
            <a href="{{route('showrelatorios')}}"><img src="{{route('imgproduto')}}/RelatoriosDash.png"></a>
        </li>
    </div>
    <div>

    </div>
    <div>

    </div>
    <div>

    </div>
    <div>

    </div>
    <div>

    </div>
    <div>

    </div>
</div>
@endsection('conteudo')
