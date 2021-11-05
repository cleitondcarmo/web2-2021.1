@extends('layouts.main')

@section('titulo','Cadastro de fornecedores')

@section('conteudo')
<div id="form" class="stylecrud">
    <form action="{{route('fornecedorcreate')}}" method="post">
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
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" id="endereco">
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email">
        <div>
            <button name="alterar" type="submit" class="btn btn-primary" style="margin-top: 10px">Cadastrar</button>
        </div>
    </form>
</div>
@endsection('conteudo')
