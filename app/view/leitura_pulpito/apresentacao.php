<div class="col-md-12">
    <h5>Apresentação de Visitante</h5>
    <?php
    foreach ($select as $apresentacao) {
        if ($apresentacao['apresentacaoVisitante'] != null || '') {
    ?>

            <p class="py-3 px-2 border border-primary rounded upper_pulpito" style="text-align: justify;">
                <?php echo $apresentacao['apresentacaoVisitante']; ?>
                <button class="btn_lido btn_lido_OK"><i class="far fa-check-circle"></i></button>
            </p>
    <?php
        } else {
            $mensagemApresentacaoVazia = '<p>Nenhuma Apresentação de Visitante</p>';
        }
    }
    ?>
</div>