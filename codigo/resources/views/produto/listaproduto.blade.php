@extends('layouts.main')

@section('titulo', 'Lista de produtos')

@section('conteudo')
<div id="form" class="styleproduto">
    @foreach ($produtos as $produto)
    <ul>
        <tr>
            <a href="{{route('produtoshow', ['id' => $produto->id])}}"><img src="{{route('imgproduto')}}/{{ $produto->imagem }}"></a>
            <div>
                <h5> {{$produto->nome}} </h5>
                <h5 style="color: red;"> R$ {{$produto->valordevenda}} </h5>
            </div>
            <div class="button">
                <td>
                    <form action="{{route('produtoedit', ['id' => $produto->id])}}">
                        <button name="alterar" type="submit" class="btn btn-outline-success">Vender</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('produtoedit', ['id' => $produto->id])}}">
                        <button name="alterar" type="submit" class="btn btn-outline-warning">Alterar</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('listaproduto')}}" method="POST">
                        <div>
                            @csrf
                            @method('DELETE')
                            <button name="excluir" type="submit" class="btn btn-outline-danger" value="deletar">Excluir</button>
                        </div>
                    </form>
                </td>
            </div>
        </tr>
    </ul>
    @endforeach
</div>
@endsection('conteudo')
