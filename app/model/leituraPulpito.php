<?php

require('conexao.php');
//namespace app\model\Conexao;

class LeituraFormulário extends Conexao
{
    private $idForm = null;
    private $select = null;

    public function setID($idForm)
    {
        $this->idForm = $this->idForm;
    }
    

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
    }
}
$FormLeitura = new LeituraFormulário;
$FormLeitura->selectDados();
