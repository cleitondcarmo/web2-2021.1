@extends('layouts.main')

@section('titulo', 'Entrada de produtos')

@section('conteudo')
<div id="form" class="stylecrud">
    <form action="{{route('entradacreate')}}" method="post">
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
        <label for="valortotal">Valor total</label>
        <input type="text" name="valortotal" id="valortotal">
        <label for="idfornecedor">ID Fornecedor</label>
        <input type="text" name="idfornecedor" id="idfornecedor">
        <div>
            <button name="alterar" type="submit" class="btn btn-primary" style="margin-top: 10px">Cadastrar</button>
        </div>
    </form>
</div>
@endsection('conteudo')
