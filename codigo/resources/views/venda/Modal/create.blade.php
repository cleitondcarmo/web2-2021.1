<div id="CadVendas" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastrar vendas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="stylebasic" class="stylebasic">
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

                    <form action="{{route('vendastore')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="valor">Valor:</label>
                            <input type="text" name="valor" class="form-control" id="valor">
                        </div>
                        <div class="form-group">
                            <label for="idcliente">ID cliente:</label>
                            <input type="text" name="idcliente" class="form-control" id="idcliente">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" style="margin-top: 10px">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
