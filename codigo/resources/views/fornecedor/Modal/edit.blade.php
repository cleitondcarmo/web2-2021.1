<div id="EditFornecedor" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar fornecedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="stylefornecedor" class="stylefornecedor">
                    <form action="{{route('fornecedorupdate', ['id' => $fornecedor->id])}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nome:</label>
                            <input type="text" name="nome" id="nome" class="form-control" value="{{$fornecedor->nome}}">
                        </div>
                        <div class="form-group">
                            <label for="">Endereço:</label>
                            <input type="text" name="endereco" class="form-control" id="endereco" value="{{$fornecedor->endereco}}">
                        </div>
                        <div class="form-group">
                            <label for="">E-mail:</label>
                            <input type="text" name="email" class="form-control" id="email" value="{{$fornecedor->email}}">
                        </div>
                        <div id="btn">
                            <button type="submit" class="btn btn-warning">Alterar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
