@extends('layouts.main')

@section('titulo','Adicionar endereço')

@section('conteudo')
<div id="form" class="stylecrud">
    <form action="{{route('storeendereco')}}" method="post">
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
        <label for="uf">UF</label>
        <input type="text" name="uf" id="uf">
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade">
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro">
        <label for="logradouro">logradouro</label>
        <input type="text" name="logradouro" id="logradouro">
        <label for="idcliente">Cliente</label>
        <input type="text" name="idcliente" id="idcliente">
        <div>
            <button name="alterar" type="submit" class="btn btn-primary" style="margin-top: 10px">Cadastrar</button>
        </div>
    </form>
</div>
@endsection('conteudo')
