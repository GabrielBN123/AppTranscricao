    <?php
    foreach ($select as $pedido_comunhao) {
        if ($pedido_comunhao['pedidoComunhao'] != null || '') {
    ?>
            <p class="py-3 px-2 border border-primary rounded upper_pulpito" style="text-align: justify;">
                <?php echo $pedido_comunhao['pedidoComunhao']; ?>
                <button class="btn_lido btn_lido_OK"><i class="far fa-check-circle"></i></button>
            </p>
    <?php

        } else {
            $mensagemPedidoComunhao = '<p>Nenhum Pedido de Comunhão</p>';
        }
    }
    ?>