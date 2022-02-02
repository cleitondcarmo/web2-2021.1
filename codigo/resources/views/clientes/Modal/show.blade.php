<div id="ShowCliente" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastro de clientes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="styleshow">
                    @foreach ($cliente as $cliente)
                    <div style="margin: 10px">
                        <td> Nome </td></br>
                        <td> Cadastrado </td></br>
                        <td> Última atualização </td></br>
                        <td> Débito </td></br>
                    </div>
                    <div>
                        <td> <?php echo $cliente->nome; ?> </td></br>
                        <td> <?php echo $cliente->created_at; ?> </td></br>
                        <td> <?php echo $cliente->updated_at; ?> </td></br>
                        <td> <?php echo $cliente->debito; ?> </td></br>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
