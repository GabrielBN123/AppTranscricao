<div class="col-md-12">
    <h5>Pedido de Louvor</h5>
    <?php
    foreach ($select as $pedido_louvor) {
        if ($pedido_louvor['pedidoLouvor'] != null || '') {
    ?>
            <p class="py-3 px-2 border border-primary rounded upper_pulpito" style="text-align: justify;">
                <?php echo $pedido_louvor['pedidoLouvor']; ?>
                <button class="btn_lido btn_lido_OK"><i class="far fa-check-circle"></i></button>
            </p>
    <?php

        }
        else{
            $mensagemPedidoLouvorVazio = '<p>Nenhum pedido de Louvor</p>';
        }
    }
    ?>
</div>