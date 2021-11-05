@extends('layouts.main')

@section('titulo', 'Mostrar clientes')

@section('conteudo')
<div class="styleshow">
    @foreach ($cliente as $cliente)
    <div style="margin: 10px">
        <td> Nome </td></br>
        <td> Cadastrado </td></br>
        <td> Última atualização </td></br>
        <td> Debito </td></br>
    </div>
    <div>
        <td> <?php echo $cliente->nome; ?> </td></br>
        <td> <?php echo $cliente->created_at; ?> </td></br>
        <td> <?php echo $cliente->updated_at; ?> </td></br>
        <td> <?php echo $cliente->debito; ?> </td></br>
    </div>
    @endforeach
</div>
@endsection('conteudo')
