<div id="CadCliente" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastro de clientes</h5>
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
                    <form action="{{route('storecliente')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" placeholder="Digite o nome do cliente" name="nome" id="nome">
                        </div>
                        <div class="form-group">
                            <label for="debito">Débito:</label>
                            <input type="text" class="form-control" placeholder="Digite o débito do cliente" name="debito" id="debito">
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
