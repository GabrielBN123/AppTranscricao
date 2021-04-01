<?php
foreach ($select as $aviso) {
    if ($aviso['aviso'] != null || '') {
?>
        <p class="py-3 px-2 border border-primary rounded upper_pulpito" style="text-align: justify;">
            <?php echo $aviso['aviso']; ?>
            <button class="btn_lido btn_lido_OK"><i class="far fa-check-circle"></i></button>
        </p>
<?php
    } else {
        $mensagemAviso = '<p>Nenhum Aviso</p>';
    }
}
?>