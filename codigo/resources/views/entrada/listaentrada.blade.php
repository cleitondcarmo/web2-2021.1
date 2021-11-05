@extends('layouts.main')

@section('titulo', 'Lista de entradas')

@section('conteudo')
<div class="styleentrada">
    <ul>
        <table class="table table-bordered .table-responsive table-dark">
            <div>
                <thead>
                    <tr class="table-active">
                        <th scope="col" width=30%>ID Entrada</th>
                        <th scope="col" width=30%>ID Fornecedor</th>
                        <th scope="col" width=30%>Valor total</th>
                        <th scope="col" width=1%></th>
                        <th scope="col" width=1%></th>
                    </tr>
                </thead>
            </div>
            @foreach ($entrada as $entrada)
            <tr>
                <div>
                    <td> <?php echo $entrada->id; ?> </td>
                    <td> <a href="{{route('fornecedorshow', ['id' => $entrada->idfornecedor])}}" style="color:red"><?php echo $entrada->idfornecedor; ?><a> </td>
                    <td> <?php echo $entrada->valortotal; ?> </td>
                </div>
                <td>
                    <form action="{{route('entradaedit', ['id' => $entrada->id])}}">
                        <button name="alterar" type="submit" class="btn btn-warning">Alterar</button>
                    </form>
                <td>
                    <form method="post">
                        <div>
                            <input name="identrada" type="hidden" entrada="<?php echo $entrada->identrada; ?>" />
                        </div>
                    </form>
                    <form action="{{route('listaentrada')}}" method="POST">
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
