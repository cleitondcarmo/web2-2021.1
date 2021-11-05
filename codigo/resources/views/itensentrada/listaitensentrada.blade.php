@extends('layouts.main')

@section('titulo','Itensentrada')

@section('conteudo')
<div class="styleitensentrada">
        <ul>
            <table class="table table-bordered .table-responsive table-dark">
                <div>
                    <thead>
                        <tr class="table-active">
                            <th scope="col" width=15%>ID Itens de entrada:</th>
                            <th scope="col" width=15%>ID Produto:</th>
                            <th scope="col" width=15%>ID Entrada:</th>
                            <th scope="col" width=15%>Preço de Compra:</th>
                            <th scope="col" width=15%>Unidade:</th>
                            <th scope="col" width=15%>Frete:</th>
                            <th scope="col" width=1%></th>
                            <th scope="col" width=1%></th>
                        </tr>
                    </thead>
                </div>
                @foreach ($itensentrada as $itensentrada)
                    <tr>
                        <div>
                            <td> <?php echo $itensentrada->id;?> </td>
                            <td> <a href="{{route('produtoshow', ['id' => $itensentrada->idproduto])}}" style="color:red;"><?php echo $itensentrada->idproduto; ?> </a></td>
                            <td> <a href="{{route('entradashow', ['id' => $itensentrada->identrada])}}" style="color:red;"><?php echo $itensentrada->identrada; ?> </a></td>
                            <td> <?php echo $itensentrada->precocompra;?> </td>
                            <td> <?php echo $itensentrada->unidade;?> </td>
                            <td> <?php echo $itensentrada->frete;?> </td>
                        </div>
                        <td>
                            <form action="{{route('itensentradaedit', ['id' => $itensentrada->id])}}">
                                <button name="alterar" type="submit" class="btn btn-warning">Alterar</button>
                            </form>
                            <td>
                                <form method="post">
                                    <div>
                                        <input name="iditensentrada" type="hidden" itensentrada="<?php echo $itensentrada->iditensentrada;?>"/>
                                    </div>
                                </form>
                                <form action="{{route('listaitensentrada')}}" method="POST">
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
