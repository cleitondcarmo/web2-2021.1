@extends('layouts.main')

@section('titulo','Itensvenda')

@section('conteudo')
<div class="styleitensvenda">
        <ul>
            <table class="table table-bordered .table-responsive table-dark">
                <div>
                    <thead>
                        <tr class="table-active">
                            <th scope="col" width=30%>ID Itens de venda:</th>
                            <th scope="col" width=30%>ID Produto:</th>
                            <th scope="col" width=30%>ID Venda:</th>
                            <th scope="col" width=30%>Valor de venda:</th>
                            <th scope="col" width=30%>Quantidade:</th>
                            <th scope="col" width=1%></th>
                            <th scope="col" width=1%></th>
                        </tr>
                    </thead>
                </div>
                @foreach ($itensvenda as $itensvenda)
                    <tr>
                        <div>
                            <td> <?php echo $itensvenda->id;?> </td>
                            <td> <a href="{{route('produtoshow', ['id' => $itensvenda->idproduto])}}" style="color:red;"><?php echo $itensvenda->idproduto; ?> </a></td>
                            <td> <a href="{{route('vendashow', ['id' => $itensvenda->idvenda])}}" style="color:red;"><?php echo $itensvenda->idvenda; ?> </a></td>
                            <td> <?php echo $itensvenda->valorvenda;?> </td>
                            <td> <?php echo $itensvenda->quantidade;?> </td>
                        </div>
                        <td>
                            <form action="{{route('itensvendaedit', ['id' => $itensvenda->id])}}">
                                <button name="alterar" type="submit" class="btn btn-warning">Alterar</button>
                            </form>
                            <td>
                                <form method="post">
                                    <div>
                                        <input name="iditensvenda" type="hidden" itensvenda="<?php echo $itensvenda->iditensvenda;?>"/>
                                    </div>
                                </form>
                                <form action="{{route('listaitensvenda')}}" method="POST">
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
