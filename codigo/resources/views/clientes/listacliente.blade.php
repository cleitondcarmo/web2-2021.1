@extends('layouts.main')

@section('titulo', 'Lista de clientes')

@section('conteudo')
<div class="stylelista">
    <div id="um">
        <li>
            <img src="{{route('imgproduto')}}/DashBoard-clientes.png">
        </li>
    </div>
    <div id="dois">
        <button class="btn btn-success" data-toggle="modal" data-target="#CadCliente">Cadastrar</button>
        @include('clientes.Modal.create')
    </div>
    <div id="tres">
        <div>
            <table class="table">
                <thead>
                    <tr class="table-active">
                        <th scope="col" width=30%>Cliente:</th>
                        <th scope="col" width=30%>Debito:</th>
                        <th scope="col" width=1%></th>
                        <th scope="col" width=1%></th>
                    </tr>
                </thead>
                @foreach ($clientes as $cliente)
                <tbody>
                    <div>
                        <td> <a href="{{route('clienteshow', ['id' => $cliente->id])}}" data-toggle="modal" data-target="#ShowCliente"><?php echo $cliente->nome; ?> </a></td>
                        <td> <?php echo $cliente->debito; ?> </td>
                    </div>
                    <td>
                        <div class="edit">
                            <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#EditCliente">Alterar</button>
                            @include('clientes.Modal.edit')
                        </div>
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
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection('conteudo')
