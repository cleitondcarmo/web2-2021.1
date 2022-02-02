@extends('layouts.main')

@section('titulo', 'Lista de vendas')

@section('conteudo')
<div class="stylelista">
    <div id="um">
        <li>
            <img src="{{route('imgproduto')}}/consultar-vendas.png"></a>
        </li>
    </div>
    <div id="dois">
        <button class="btn btn-success" data-toggle="modal" data-target="#CadVendas">Cadastrar</button>
        @include('venda.Modal.create')
    </div>
    <div id="tres">
        <table class="table table-bordered .table-responsive table-dark">
            <thead>
                <tr class="table-active">
                    <th scope="col" width=10%>ID Venda:</th>
                    <th scope="col" width=10%>ID Cliente:</th>
                    <th scope="col" width=10%>Valor</th>
                    <th scope="col" width=20%>Cadastrado</th>
                    <th scope="col" width=20%>Atualizado</th>
                    <th scope="col" width=1%></th>
                    <th scope="col" width=1%></th>
                </tr>
            </thead>
            @foreach ($venda as $venda)
            <tbody>
                <div>
                    <td> <?php echo $venda->id; ?> </td>
                    <td> <a href="{{route('clienteshow', ['id' => $venda->idcliente])}}" style="color:red"><?php echo $venda->idcliente; ?><a> </td>
                    <td> <?php echo $venda->valor; ?> </td>
                    <td> <?php echo $venda->created_at; ?> </td>
                    <td> <?php echo $venda->updated_at; ?> </td>
                </div>
                <td>
                    <div class="edit">
                        <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#EditVenda">Alterar</button>
                        @include('venda.Modal.edit')
                    </div>
                <td>
                    <form method="post">
                        <div>
                            <input name="idvenda" type="hidden" venda="<?php echo $venda->idvenda; ?>" />
                        </div>
                    </form>
                    <form action="{{route('listavenda')}}" method="POST">
                        <div>
                            @csrf
                            @method('DELETE')
                            <button name="excluir" type="submit" class="btn btn-danger" value="deletar">Excluir</button>
                        </div>
                    </form>
                </td>
                </td>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection('conteudo')
