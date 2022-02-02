@extends('layouts.main')

@section('titulo', 'Mostrar endereços')

@section('conteudo')
<div class="styleshow">
    @foreach ($endereco as $endereco)
    <div style="margin: 10px">
        <td> ID Endereço </td></br>
        <td> ID Cliente </td></br>
        <td> Nome </td></br>
        <td> Última atualização </td></br>
        <td> UF </td></br>
        <td> Cidade </td></br>
        <td> Bairro </td></br>
        <td> Logradouro </td></br>
    </div>
    <div>
        <td> <?php echo $endereco->id; ?> </td></br>
        <td> <?php echo $endereco->idcliente; ?> </td></br>
        <td> <?php echo $cliente->nome; ?> </td></br>
        <td> <?php echo $endereco->updated_at; ?> </td></br>
        <td> <?php echo $endereco->uf; ?> </td></br>
        <td> <?php echo $endereco->cidade; ?> </td></br>
        <td> <?php echo $endereco->bairro; ?> </td></br>
        <td> <?php echo $endereco->logradouro; ?> </td></br>
    </div>
    @endforeach
</div>
@endsection('conteudo')

