@extends('layouts.main')

@section('titulo', 'Lista de vendas')

@section('conteudo')
    <div class="stylevenda">
        <ul>
            <table class="table table-bordered .table-responsive table-dark">
                <div>
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
                </div>
                @foreach ($venda as $venda)
                        <tr>
                            <div>
                                <td> <?php echo $venda->id;?> </td>
                                <td> <a href="{{route('clienteshow', ['id' => $venda->idcliente])}}" style="color:red"><?php echo $venda->idcliente;?><a> </td>
                                <td> <?php echo $venda->valor;?> </td>
                                <td> <?php echo $venda->created_at;?> </td>
                                <td> <?php echo $venda->updated_at;?> </td>
                            </div>
                            <td>
                                <form action="{{route('vendaedit', ['id' => $venda->id])}}">
                                    <button name="alterar" type="submit" class="btn btn-warning">Alterar</button>
                                </form>
                                <td>
                                    <form method="post">
                                        <div>
                                            <input name="idvenda" type="hidden" venda="<?php echo $venda->idvenda;?>"/>
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
                        </tr>
                @endforeach
            </table>
        </ul>
    </div>
@endsection('conteudo')
