<?php

foreach ($select as $dados) {
    echo '<hr />';

    if ($dados['apresentacaoVisitante'] != null || '') {
?>
        <div class="col-md-12">
            <h5>Apresentação de Visitante</h5>

            <textarea class="form-control" name="apresentacao" id="apre" placeholder="Apresentação" rows="3"><?php echo $dados['apresentacaoVisitante']; ?></textarea>
        </div>
    <?php
    }

    if ($dados['aviso'] != null || '') {
    ?>
        <input type="number" name="formID" hidden value="<?php echo $dados['formID'] ?>">
        <div class="col-md-12">
            <h5>Avisos</h5>
            <textarea class="form-control" name="aviso" id="apre" placeholder="Apresentação" rows="3"><?php echo $dados['aviso']; ?></textarea>
        </div>
    <?php
    }
    if ($dados['pedidoOracao'] != null || '') {
    ?>
        <div class="col-md-12">
            <h5>Pedido de Oração</h5>
            <textarea class="form-control" name="pedidoOracao" id="apre" placeholder="Apresentação" rows="3"><?php echo $dados['pedidoOracao']; ?></textarea>
        </div>
    <?php
    }
    if ($dados['felicitacoes'] != null || '') {
    ?>
        <div class="col-md-12">
            <h5>Felicitações</h5>
            <textarea class="form-control" name="felicitacao" id="apre" placeholder="Felicitações" rows="3"><?php echo $dados['felicitacoes']; ?></textarea>
        </div>
    <?php
    }

    if ($dados['pedidoLouvor'] != null || '') {
    ?>
        <div class="col-md-12">
            <h5>Pedidos de Louvor</h5>
            <textarea class="form-control" name="pedidoLouvor" id="apre" placeholder="Apresentação" rows="3"><?php echo $dados['pedidoLouvor']; ?></textarea>
        </div>
    <?php
    }


    if ($dados['acaoGraca'] != null || '') {
    ?>
        <div class="col-md-12">
            <h5>Ação de Graças</h5>
            <textarea class="form-control" name="acaoGraca" id="apre" placeholder="Apresentação" rows="3"><?php echo $dados['acaoGraca']; ?></textarea>
        </div>
    <?php
    }
    if ($dados['apresentacaoRN'] != null || '') {
    ?>
        <div class="col-md-12">
            <h5>Apresentação de Recém-Nascidos</h5>
            <textarea class="form-control" name="apresentacaoRN" id="apre" placeholder="Apresentação" rows="3"><?php echo $dados['apresentacaoRN']; ?></textarea>
        </div>
    <?php
    }
    if ($dados['pedidoComunhao'] != null || '') {
    ?>
        <div class="col-md-12">
            <h5>Pedidos de Comunhão</h5>
            <textarea class="form-control" name="pedidoComunhao" id="apre" placeholder="Pedido de Comunhão" rows="3"><?php echo $dados['pedidoComunhao']; ?></textarea>
        </div>
    <?php
    }
    if ($dados['cartaApresentacao'] != null || '') {
    ?>
        <div class="col-md-12">
            <h5>Carta de apresentação</h5>
            <textarea class="form-control" name="cartaApp" id="apre" placeholder="Apresentação" rows="3"><?php echo $dados['cartaApresentacao']; ?></textarea>
        </div>
<?php
    }
}
