@extends('layouts.main')

@section('titulo', 'Mostrar fornecedores')

@section('conteudo')
<div class="styleshow">
    @foreach ($fornecedor as $fornecedor)
    <div style="margin: 10px">
        <td> Nome </td></br>
        <td> Cadastrado </td></br>
        <td> Última atualização </td></br>
        <td> E-mail </td></br>
        <td> Endereço </td></br>
    </div>
    <div>
        <td> <?php echo $fornecedor->nome; ?> </td></br>
        <td> <?php echo $fornecedor->created_at; ?> </td></br>
        <td> <?php echo $fornecedor->updated_at; ?> </td></br>
        <td> <?php echo $fornecedor->email; ?> </td></br>
        <td> <?php echo $fornecedor->endereco; ?> </td></br>
    </div>
    @endforeach
</div>
@endsection('conteudo')
