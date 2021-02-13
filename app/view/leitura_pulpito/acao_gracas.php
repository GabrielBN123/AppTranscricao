<div class="col-md-12">
    <h5>Ação de Graças</h5>
    <?php
    foreach ($select as $acao_graca) {
        if ($acao_graca['acaoGraca'] != null || '') {
    ?>
            <p class="py-3 px-2 border border-primary rounded upper_pulpito" style="text-align: justify;">
                <?php echo $acao_graca['acaoGraca']; ?>
                <button class="btn_lido btn_lido_OK"><i class="far fa-check-circle"></i></button>
            </p>
    <?php
        } else {
            $mensagemAcaoVazia = '<p>Nenhuma Ação de Graças</p>';
        }
    }
    ?>
</div>