<div class="col-md-12">
    <h5>Carta de apresentação</h5>
    <?php
    foreach ($select as $carta_apresentacao) {
        if ($carta_apresentacao['cartaApresentacao'] != null || '') {
    ?>
            <p class="py-3 px-2 border border-primary rounded upper_pulpito" style="text-align: justify;">
                <?php echo $carta_apresentacao['cartaApresentacao']; ?>
                <button class="btn_lido btn_lido_OK"><i class="far fa-check-circle"></i></button>
            </p>
    <?php
        }
        else{
            $mensagemCartaApresentacaoVazia = '<p>Nenhuma Carta de Apresentação</p>';
        }
    }
    ?>
</div>