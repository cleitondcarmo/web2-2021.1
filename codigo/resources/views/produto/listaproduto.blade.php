@extends('layouts.main')

@section('titulo', 'Lista de produtos')

@section('conteudo')
<div class="stylelista">
    <div id="um">
        <li>
            <img src="{{route('imgproduto')}}/DashBoard-produtos.png">
        </li>
    </div>
    <div id="dois">
        <button class="btn btn-success" data-toggle="modal" data-target="#CadProduto">Cadastrar</button>
        @include('produto.Modal.create')
    </div>
    <div id="tres">
        <div id="styleproduto" class="styleproduto">
            @foreach ($produtos as $produto)
            <ul>
                <tr>
                    <a href="{{route('produtoshow', ['id' => $produto->id])}}"><img src="{{route('imgproduto')}}/{{ $produto->imagem }}"></a>
                    <div>
                        <h5> {{$produto->nome}} </h5>
                        <h5 style="color: red;"> R$ {{$produto->valordevenda}} </h5>
                    </div>
                    <div class="btnproduto">
                        <td>
                            <div class="btnproduto">
                                <form action="{{route('itensvendacreate', ['id' => $produto->id])}}">
                                    <button name="alterar" type="submit" class="btn btn-light">Vender</button>
                                </form>
                            </div>
                        </td>
                        <td>
                            <div class="edit">
                                <button type="submit" class="btn btn-light" data-toggle="modal" data-target="#EditProduto">Alterar</button>
                                @include('produto.Modal.edit')
                            </div>
                        </td>
                        <td>
                            <form action="{{route('listaproduto')}}" method="POST">
                                <div>
                                    @csrf
                                    @method('DELETE')
                                    <button name="excluir" type="submit" class="btn btn-light" value="deletar">Excluir</button>
                                </div>
                            </form>
                        </td>
                    </div>
                </tr>
            </ul>
            @endforeach
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection('conteudo')
