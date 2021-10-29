@extends('layouts.main')

@section('titulo', 'Lista de clientes')

@section('conteudo')
    <div id="form">
        @foreach ($clientes as $cliente)
        <ul>
            <li> Nome do cliente: {{$cliente->nome}} </li>
            <li> Debito do cliente: {{$cliente->debito}} </li>
            <li><a href="{{route('clienteedit', ['id' => $cliente->id])}}">editar cliente</a></li>

            <form action="{{route('listacliente')}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="deletar">
            </form>
        </ul>
        @endforeach
    </div>
@endsection('conteudo')
