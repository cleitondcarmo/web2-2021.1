<div id="CadCompras" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastro de compras</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="stylebasic" class="stylebasic">
                    <form action="{{route('comprasstore')}}" method="post">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        @csrf
                        <div class="form-group">
                            <label for="valortotal">Valor total:</label>
                            <input type="text" name="valortotal" class="form-control" id="valortotal">
                        </div>
                        <div class="form-group">
                            <label for="idfornecedor">ID Fornecedor:</label>
                            <input type="text" name="idfornecedor" class="form-control" id="idfornecedor">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
