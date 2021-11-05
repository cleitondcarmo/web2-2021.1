@extends('layouts.main')

@section('titulo', 'Lista de clientes')

@section('conteudo')
<div class="stylecliente">
    <ul>
        <table class="table table-bordered .table-responsive table-dark">
            <div>
                <thead>
                    <tr class="table-active">
                        <th scope="col" width=30%>Cliente:</th>
                        <th scope="col" width=30%>Debito:</th>
                        <th scope="col" width=1%></th>
                        <th scope="col" width=1%></th>
                        <th scope="col" width=1%></th>
                    </tr>
                </thead>
            </div>
            @foreach ($clientes as $cliente)
                <tr>
                    <div>
                        <div>
                            <td> <a href="{{route('clienteshow', ['id' => $cliente->id])}}" style="color:rgb(0, 204, 255);"><?php echo $cliente->nome; ?> </a></td>
                            <td> <?php echo $cliente->debito; ?> </td>
                        </div>
                        <td>
                            <form action="{{route('enderecoshow', ['id' => $cliente->id])}}">
                                <button name="endereco" type="submit" class="btn btn-warning">Endereços</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('clienteedit', ['id' => $cliente->id])}}">
                                <button name="alterar" type="submit" class="btn btn-warning">Alterar</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('listacliente')}}" method="POST">
                                <div>
                                    @csrf
                                    @method('DELETE')
                                    <button name="excluir" type="submit" class="btn btn-danger" value="deletar">Excluir</button>
                                </div>
                            </form>
                        </td>
                    </div>
                </tr>
            @endforeach
        </table>
    </ul>
</div>
@endsection('conteudo')
