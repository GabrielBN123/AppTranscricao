<div class="col-md-12">
    <h5>Apresentação de Recém-Nascidos</h5>
    <?php
    foreach ($select as $apresentacaoRN) {
        if ($apresentacaoRN['apresentacaoRN'] != null || '') {
    ?>
            <p class="py-3 px-2 border border-primary rounded upper_pulpito" style="text-align: justify;">
                <?php echo $apresentacaoRN['apresentacaoRN']; ?>
                <button class="btn_lido btn_lido_OK"><i class="far fa-check-circle"></i></button>
            </p>
    <?php
        } else {
            $mensagemApresentacaoRNVazia = '<p>Nenhuma Apresentação de Recém Nascido</p>';
        }
    }
    ?>
</div>