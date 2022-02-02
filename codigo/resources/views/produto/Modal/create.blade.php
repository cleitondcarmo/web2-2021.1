<div id="CadProduto" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastro de produtos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="styleproduto" class="styleproduto">
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

                    <form action="{{route('produtostore')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" class="form-control" id="nome">
                        </div>
                        <div class="form-group">
                            <label for="frete">Frete:</label>
                            <input type="text" name="frete" class="form-control" id="frete">
                        </div>
                        <div class="form-group">
                            <label for="valordecompra">Valor de compra:</label>
                            <input type="text" name="valordecompra" class="form-control" id="valordecompra">
                        </div>
                        <div class="form-group">
                            <label for="quantidade">Quantidade:</label>
                            <input type="text" name="quantidade" class="form-control" id="quantidade">
                        </div>
                        <div class="form-group">
                            <label for="desconto">Desconto:</label>
                            <input type="text" name="desconto" class="form-control" id="desconto">
                        </div>
                        <div class="form-group">
                            <label for="valordevenda">Valor de venda:</label>
                            <input type="text" name="valordevenda" class="form-control" id="valordevenda">
                        </div>
                        <div>
                            <label for="imagem">Imagem:</label>
                            <input type="file" id="imagem" name="imagem" class="form-control-file"></input>
                            <input type="hidden" name="idproduto" value={{$idproduto ?? ''}}>
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
