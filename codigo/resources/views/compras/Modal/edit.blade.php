<div id="EditCompras" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar compra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="stylebasic" class="stylebasic">
                    <form action="{{route('comprasupdate', ['id' => $compra->id])}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Valor total:</label>
                            <input type="text" name="valortotal" class="form-control" id="valortotal" value="{{$compra->valortotal}}">
                        </div>
                        <div class="form-group">
                            <label for="">ID Fornecedor:</label>
                            <input type="text" name="idfornecedor" class="form-control" id="idfornecedor" value="{{$compra->idfornecedor}}">
                        </div>
                        <div id="btn">
                            <button name="alterar" type="submit" class="btn btn-warning">Alterar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
