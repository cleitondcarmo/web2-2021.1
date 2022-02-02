<div id="EditProduto" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Editar produto</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="styleproduto" class="styleproduto">
                    <form action="{{route('produtoupdate', ['id' => $produto->id])}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nome:</label>
                            <input type="text" name="nome" class="form-control"  id="nome" value="{{$produto->nome}}">
                        </div>
                        <div class="form-group">
                            <label for="">Valor de compra:</label>
                            <input type="text" name="valordecompra" class="form-control"  id="valordecompra" value="{{$produto->valordecompra}}">
                        </div>
                        <div class="form-group">
                            <label for="">Valor de venda:</label>
                            <input type="text" name="valordevenda" class="form-control"  id="valordevenda" value="{{$produto->valordevenda}}">
                        </div>
                        <div class="form-group">
                            <label for="">Desconto:</label>
                            <input type="text" name="desconto" class="form-control"  id="desconto" value="{{$produto->desconto}}">
                        </div>
                        <div class="form-group">
                            <label for="">Frete:</label>
                            <input type="text" name="frete" class="form-control"  id="frete" value="{{$produto->frete}}">
                        </div>
                        <div class="form-group">
                            <label for="">Quantidade:</label>
                            <input type="text" name="quantidade" class="form-control"  id="quantidade" value="{{$produto->quantidade}}">
                        </div>
                        <div id="alterar" class="alterar">
                            <button type="submit" class="btn btn-warning">Alterar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
