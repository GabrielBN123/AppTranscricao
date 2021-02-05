<?php

require("conexao.php");

class LeituraFormulário extends Conexao
{
    private $select = null;

    public function selectDados()
    {
        $this->select = $this->conexao()->prepare('SELECT * FROM formulario');
    }

    public function getDados()
    {
        return $this->select->execute();
    }

    public function exibirDados()
    {
        $select = $this->conexao()->prepare('SELECT * FROM formulario');

        $select->execute();

        foreach ($select as $dados) {

            if ($dados['apresentacao'] != null || '') {
?>
                <h6>
                    Formulário numero: <?php echo $dados['apresentacao'] ?>
                </h6>
                <hr>
                <div class="col-md-12">
                    <h5>Apresentação</h5>

                    <textarea class="form-control" name="apresentacao" id="apre" placeholder="Apresentação" rows="3"><?php echo $dados['apresentacao']; ?></textarea>
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
            if ($dados['cartaApresentacao'] != null || '') {
            ?>
                <div class="col-md-12">
                    <h5>Carta de apresentação</h5>
                    <textarea class="form-control" name="cartaApp" id="apre" placeholder="Apresentação" rows="3"><?php echo $dados['cartaApresentacao']; ?></textarea>
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
            if ($dados['pedidoOracao'] != null || '') {
            ?>
                <div class="col-md-12">
                    <h5>Pedido de Oração</h5>
                    <textarea class="form-control" name="pedidoOracao" id="apre" placeholder="Apresentação" rows="3"><?php echo $dados['pedidoOracao']; ?></textarea>
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
        }
    }
}
$FormLeitura = new LeituraFormulário;
$FormLeitura->selectDados();
