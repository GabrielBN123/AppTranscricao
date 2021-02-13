<div class="col-md-12">
    <h5>Pedido de Oração</h5>
    <?php
    foreach ($select as $pedido_oracao) {
        if ($pedido_oracao['pedidoOracao'] != null || '') {
    ?>
            <p class="py-3 px-2 border border-primary rounded upper_pulpito" style="text-align: justify;">
                <?php echo $pedido_oracao['pedidoOracao']; ?>
                <button class="btn_lido btn_lido_OK"><i class="far fa-check-circle"></i></button>
            </p>
    <?php

        }
        else{
            $mensagemPedidoOracaoVazio = '<p>Nenhum Pedido de Oração</p>';
        }
    }
    ?>
</div>