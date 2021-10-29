@extends('layouts.main')

@section('titulo', 'Mostrar clientes')

@section('conteudo')
    <div id ="form">
        @foreach ($clientes as $cliente)
            <ul>
                <li> Nome do cliente: {{$cliente->nome}} </li>
                <li> Debito do cliente: {{$cliente->debito}} </li>
            </ul>
        @endforeach
    </div>
@endsection('conteudo')
