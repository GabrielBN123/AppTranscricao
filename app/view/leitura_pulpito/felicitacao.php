    <?php
    foreach ($select as $felicitacao) {
        if ($felicitacao['felicitacoes'] != null || '') {
    ?>
            <p class="py-3 px-2 border border-primary rounded upper_pulpito" style="text-align: justify;">
                <?php echo $felicitacao['felicitacoes']; ?>
                <button class="btn_lido btn_lido_OK"><i class="far fa-check-circle"></i></button>
            </p>
    <?php

        }
        else{
            $mensagemFelicitacaoVazia = '<p>Nenhuma Felicitação</p>';
        }
    }
    ?>