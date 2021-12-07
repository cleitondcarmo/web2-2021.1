@extends('layouts.main')

@section('titulo', 'Lista de produtos')

@section('conteudo')
<div class="styleprodutos">
    <div id="um">
        <li>
            <img src="{{route('imgproduto')}}/DashBoard-produtos.png">
        </li>
    </div>
</div>
@endsection('conteudo')
