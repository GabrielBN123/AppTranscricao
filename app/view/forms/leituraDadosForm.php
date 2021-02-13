<?php

foreach ($select as $texto) {

    if ($texto['apresentacao'] != null || '') {
?>
        <div class="col-md-12">
            <h5>Apresentação</h5>
            <p class="py-2 px-2 border border-primary rounded" style="text-align: justify;">
                <?php echo $texto['apresentacao']; ?>
            </p>
        </div>
    <?php
    }

    if ($texto['aviso'] != null || '') {
    ?>
        <div class="col-md-12">
            <h5>Avisos</h5>
            <p class="py-2 px-2 border border-primary rounded" style="text-align: justify;">
                <?php echo $texto['aviso']; ?>
            </p>
        </div>
    <?php
    }
    if ($texto['cartaApresentacao'] != null || '') {
    ?>
        <div class="col-md-12">
            <h5>Carta de apresentação</h5>
            <p class="py-2 px-2 border border-primary rounded" style="text-align: justify;">
                <?php echo $texto['cartaApresentacao']; ?>
            </p>
        </div>
    <?php
    }
    if ($texto['acaoGraca'] != null || '') {
    ?>
        <div class="col-md-12">
            <h5>Ação de Graças</h5>
            <p class="py-2 px-2 border border-primary rounded" style="text-align: justify;">
                <?php echo $texto['acaoGraca']; ?>
            </p>
        </div>
    <?php
    }
    if ($texto['pedidoOracao'] != null || '') {
    ?>
        <div class="col-md-12">
            <h5>Pedido de Oração</h5>
            <p class="py-2 px-2 border border-primary rounded" style="text-align: justify;">
                <?php echo $texto['pedidoOracao']; ?>
            </p>
        </div>
    <?php
    }
    if ($texto['apresentacaoRN'] != null || '') {
    ?>
        <div class="col-md-12">
            <h5>Apresentação de Recém-Nascidos</h5>
            <p class="py-2 px-2 border border-primary rounded" style="text-align: justify;">
                <?php echo $texto['apresentacaoRN']; ?>
            </p>
        </div>
<?php
    }
}
