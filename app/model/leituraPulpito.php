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
        $this->select = $this->con()->prepare('SELECT * FROM formulario');
    }

    public function getDados()
    {
        return $this->select->execute();
    }

    public function exibeApresentacao()
    {
        $instituicaoID = $_SESSION['instituicao'];

        $select = $this->con()->prepare('SELECT apresentacaoVisitante FROM formulario where instituicaoID = :instituicaoID and transcricao_ok = 1 ORDER BY formID DESC;');

        $select->bindValue(':instituicaoID', $instituicaoID, PDO::PARAM_INT);

        $select->execute();

        $count = $select->rowCount();


        if ($count > 0) {
            include '../view/leitura_pulpito/apresentacao.php';
        } else {
            // include '../view/.php';
            echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
        }
    }

    public function exibeAviso()
    {
        $instituicaoID = $_SESSION['instituicao'];

        $select = $this->con()->prepare('SELECT aviso FROM formulario where instituicaoID = :instituicaoID and transcricao_ok = 1 ORDER BY formID DESC;');

        $select->bindValue(':instituicaoID', $instituicaoID, PDO::PARAM_INT);

        $select->execute();

        $count = $select->rowCount();

        if ($count > 0) {
            include '../view/leitura_pulpito/aviso.php';
        } else {
            // include '../view/.php';
            echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
        }
    }

    public function exibeFelicitacao()
    {
        $instituicaoID = $_SESSION['instituicao'];

        $select = $this->con()->prepare('SELECT felicitacoes FROM formulario where instituicaoID = :instituicaoID and transcricao_ok = 1 ORDER BY formID DESC;');

        $select->bindValue(':instituicaoID', $instituicaoID, PDO::PARAM_INT);

        $select->execute();

        $count = $select->rowCount();

        if ($count > 0) {
            include '../view/leitura_pulpito/felicitacao.php';
        } else {
            // include '../view/.php';
            echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
        }
    }

    public function exibePedidoLouvor()
    {
        $instituicaoID = $_SESSION['instituicao'];

        $select = $this->con()->prepare('SELECT pedidoLouvor FROM formulario where instituicaoID = :instituicaoID and transcricao_ok = 1 ORDER BY formID DESC;');

        $select->bindValue(':instituicaoID', $instituicaoID, PDO::PARAM_INT);

        $select->execute();

        $count = $select->rowCount();

        if ($count > 0) {
            include '../view/leitura_pulpito/pedido_louvor.php';
        } else {
            // include '../view/.php';
            echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
        }
    }

    public function exibeCartaApresentacao()
    {
        $instituicaoID = $_SESSION['instituicao'];

        $select = $this->con()->prepare('SELECT cartaApresentacao FROM formulario where instituicaoID = :instituicaoID and transcricao_ok = 1 ORDER BY formID DESC;');

        $select->bindValue(':instituicaoID', $instituicaoID, PDO::PARAM_INT);

        $select->execute();

        $count = $select->rowCount();

        if ($count > 0) {
            include '../view/leitura_pulpito/carta_apresentacao.php';
        } else {
            // include '../view/.php';
            echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
        }
    }
    public function exibeAcaoGraca()
    {
        $instituicaoID = $_SESSION['instituicao'];

        $select = $this->con()->prepare('SELECT acaoGraca FROM formulario where instituicaoID = :instituicaoID and transcricao_ok = 1 ORDER BY formID DESC;');

        $select->bindValue(':instituicaoID', $instituicaoID, PDO::PARAM_INT);

        $select->execute();

        $count = $select->rowCount();

        if ($count > 0) {
            include '../view/leitura_pulpito/acao_gracas.php';
        } else {
            // include '../view/.php';
            echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
        }
    }

    public function exibePedidoOracao()
    {
        $instituicaoID = $_SESSION['instituicao'];

        $select = $this->con()->prepare('SELECT pedidoOracao FROM formulario where instituicaoID = :instituicaoID and transcricao_ok = 1 ORDER BY formID DESC;');

        $select->bindValue(':instituicaoID', $instituicaoID, PDO::PARAM_INT);

        $select->execute();

        $count = $select->rowCount();

        if ($count > 0) {
            include '../view/leitura_pulpito/pedido_oracao.php';
        } else {
            // include '../view/.php';
            echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
        }
    }

    public function exibePedidoComunhao()
    {
        $instituicaoID = $_SESSION['instituicao'];

        $select = $this->con()->prepare('SELECT pedidoComunhao FROM formulario where instituicaoID = :instituicaoID and transcricao_ok = 1 ORDER BY formID DESC;');

        $select->bindValue(':instituicaoID', $instituicaoID, PDO::PARAM_INT);

        $select->execute();

        $count = $select->rowCount();

        if ($count > 0) {
            include '../view/leitura_pulpito/pedido_comunhao.php';
        } else {
            // include '../view/.php';
            echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
        }
    }

    public function exibeApresentacaoRN()
    {
        $instituicaoID = $_SESSION['instituicao'];

        $select = $this->con()->prepare('SELECT apresentacaoRN FROM formulario where instituicaoID = :instituicaoID and transcricao_ok = 1 ORDER BY formID DESC;');

        $select->bindValue(':instituicaoID', $instituicaoID, PDO::PARAM_INT);

        $select->execute();

        $count = $select->rowCount();

        if ($count > 0) {
            include '../view/leitura_pulpito/apresentacaoRN.php';
        } else {
            // include '../view/.php';
            echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
        }
    }
}
$FormLeitura = new LeituraFormulário;
$FormLeitura->selectDados();
