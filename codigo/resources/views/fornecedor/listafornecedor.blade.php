@extends('layouts.main')

@section('titulo', 'Lista de fornecedores')

@section('conteudo')
<div class="stylelista">
    <div id="um">
        <li>
            <img src="{{route('imgproduto')}}/DashBoard-fornecedores.png">
        </li>
    </div>
    <div id="dois">
        <button class="btn btn-success" data-toggle="modal" data-target="#CadFornecedor">Cadastrar</button>
        @include('fornecedor.Modal.create')
    </div>
    <div id="tres">
        <div>
            <table class="table">
                <thead>
                    <tr class="table-active">
                        <th scope="col" width=30%>Fornecedor:</th>
                        <th scope="col" width=30%>E-mail:</th>
                        <th scope="col" width=1%></th>
                        <th scope="col" width=1%></th>
                    </tr>
                </thead>
                @foreach ($fornecedor as $fornecedor)
                <tbody>
                    <div>
                        <td> <?php echo $fornecedor->nome; ?> </td>
                        <td> <?php echo $fornecedor->email; ?> </td>
                    </div>
                    <td>
                        <div class="edit">
                            <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#EditFornecedor">Alterar</button>
                            @include('fornecedor.Modal.edit')
                        </div>
                    <td>
                        <form method="post">
                            <div>
                                <input name="idfornecedor" type="hidden" fornecedor="<?php echo $fornecedor->idfornecedor; ?>" />
                            </div>
                        </form>
                        <form action="{{route('listafornecedor')}}" method="POST">
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
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection('conteudo')
