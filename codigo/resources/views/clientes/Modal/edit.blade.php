<div id="EditCliente" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="stylebasic" class="stylebasic">
                    <form action="{{route('clientesupdate', ['id' => $cliente->id])}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Cliente:</label>
                            <input type="text" name="nome" class="form-control" id="nome" value="{{$cliente->nome}}">
                        </div>
                        <div class="form-group">
                            <label for="">Débito:</label>
                            <input type="text" name="debito" class="form-control" id="debito" value="{{$cliente->debito}}">
                        </div>
                        <div id="btn">
                            <button type="submit" class="btn btn-warning" >Alterar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
