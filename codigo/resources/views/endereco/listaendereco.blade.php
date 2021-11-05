@extends('layouts.main')

@section('titulo', 'Lista de enderecos')

@section('conteudo')
<div class="styleendereco">
    <ul>
        <table class="table table-bordered .table-responsive table-dark">
            <div>
                <thead>
                    <tr class="table-active">
                        <th scope="col" width=10%>ID Endereço</th>
                        <th scope="col" width=8%>ID Cliente</th>
                        <th scope="col" width=5%>UF</th>
                        <th scope="col" width=20%>Cidade</th>
                        <th scope="col" width=20%>Bairro</th>
                        <th scope="col" width=20%>Atualizado</th>
                        <th scope="col" width=1%></th>
                        <th scope="col" width=1%></th>
                    </tr>
                </thead>
            </div>
            @foreach ($endereco as $endereco)
            <tr>
                <div>
                    <td> <?php echo $endereco->id; ?> </td>
                    <td> <a href="{{route('clienteshow', ['id' => $endereco->idcliente])}}" style="color:red"><?php echo $endereco->idcliente; ?><a> </td>
                    <td> <?php echo $endereco->uf; ?> </td>
                    <td> <?php echo $endereco->cidade; ?> </td>
                    <td> <?php echo $endereco->bairro; ?> </td>
                    <td> <?php echo $endereco->updated_at; ?> </td>
                </div>
                <td>
                    <form action="{{route('enderecoedit', ['id' => $endereco->id])}}">
                        <button name="alterar" type="submit" class="btn btn-warning">Alterar</button>
                    </form>
                <td>
                    <form method="post">
                        <div>
                            <input name="idendereco" type="hidden" endereco="<?php echo $endereco->idendereco; ?>" />
                        </div>
                    </form>
                    <form action="{{route('listaendereco')}}" method="POST">
                        <div>
                            @csrf
                            @method('DELETE')
                            <button name="excluir" type="submit" class="btn btn-danger" value="deletar">Excluir</button>
                        </div>
                    </form>
                </td>
                </td>
            </tr>
            @endforeach
        </table>
    </ul>
</div>
@endsection('conteudo')
