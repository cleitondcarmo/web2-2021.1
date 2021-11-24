@extends('layouts.main')

@section('titulo','Fornecedores')

@section('conteudo')
<div class="stylefornecedor">
        <ul>
            <table class="table table-bordered .table-responsive table-dark">
                <div>
                    <thead>
                        <tr class="table-active">
                            <th scope="col" width=30%>Fornecedor:</th>
                            <th scope="col" width=30%>E-mail:</th>
                            <th scope="col" width=1%></th>
                            <th scope="col" width=1%></th>
                        </tr>
                    </thead>
                </div>
                @foreach ($fornecedor as $fornecedor)
                    <tr>
                        <div>
                            <td> <?php echo $fornecedor->nome;?> </td>
                            <td> <?php echo $fornecedor->email;?> </td>
                        </div>
                        <td>
                            <form action="{{route('fornecedoredit', ['id' => $fornecedor->id])}}">
                                <button name="alterar" type="submit" class="btn btn-warning">Alterar</button>
                            </form>
                            <td>
                                <form method="post">
                                    <div>
                                        <input name="idfornecedor" type="hidden" fornecedor="<?php echo $fornecedor->idfornecedor;?>"/>
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
                    </tr>
                @endforeach
            </table>
        </ul>
    </div>
@endsection('conteudo')