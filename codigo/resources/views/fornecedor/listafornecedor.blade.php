@extends('layouts.main')

@section('titulo','Fornecedores')

@section('conteudo')
<div id="form">
    @foreach ($fornecedor as $fornecedores)
        <ul>
            <li> Nome do fornecedor: {{$fornecedores->nome}} </li>
            <li> Endereço do fornecedor: {{$fornecedores->endereco}} </li>
            <li> E-mail fornecedor: {{$fornecedores->email}} </li>
        </ul>
    @endforeach
</div>
@endsection('conteudo')
