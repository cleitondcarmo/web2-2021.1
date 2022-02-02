<div id="EditVenda" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar venda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="stylebasic" class="stylebasic">
                    <form action="{{route('vendaupdate', ['id' => $venda->id])}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Valor:</label>
                            <input type="text" name="valor" class="form-control" id="valor" value="{{$venda->valor}}">
                        </div>
                        <div class="form-group">
                            <label for="">Cliente:</label>
                            <input type="text" name="idcliente" class="form-control" id="idcliente" value="{{$venda->idcliente}}">
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
