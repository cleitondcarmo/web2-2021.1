@extends('layouts.main')

@section('titulo', 'Lista de compras')

@section('conteudo')
<div class="stylelista">
    <div id="um">
        <li>
            <img src="{{route('imgproduto')}}/DashBoard-compras.png">
        </li>
    </div>
    <div id="dois">
        <button class="btn btn-success" data-toggle="modal" data-target="#CadCompras">Cadastrar</button>
        @include('compras.Modal.create')
    </div>
    <div id="tres">
        <div>
            <table class="table">
                <thead>
                    <tr class="table-active">
                        <th scope="col" width=30%>ID compra</th>
                        <th scope="col" width=30%>ID Fornecedor</th>
                        <th scope="col" width=30%>Valor total</th>
                        <th scope="col" width=1%></th>
                        <th scope="col" width=1%></th>
                    </tr>
                </thead>
                @foreach ($compras as $compra)
                <tbody>
                    <div>
                        <td> <?php echo $compra->id; ?> </td>
                        <td> <a href="{{route('fornecedorshow', ['id' => $compra->idfornecedor])}}"><?php echo $compra->idfornecedor; ?><a> </td>
                        <td> <?php echo $compra->valortotal; ?> </td>
                    </div>
                    <td>
                        <div>
                            <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#EditCompras">Alterar</button>
                            @include('compras.Modal.edit')
                        </div>
                    </td>
                    <td>
                        <form method="post">
                            <div>
                                <input name="idcompra" type="hidden" compra="<?php echo $compra->idcompra; ?>" />
                            </div>
                        </form>
                        <form action="{{route('listacompras')}}" method="POST">
                            <div>
                                @csrf
                                @method('DELETE')
                                <button name="excluir" type="submit" class="btn btn-danger" value="deletar">Excluir</button>
                            </div>
                        </form>
                    </td>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection('conteudo')
