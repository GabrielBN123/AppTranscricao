<?php

require("conexao.php");


echo 'teste';

class CadastrarFormulario extends Conexao
{

    public function getIdUsuario()
    {
        $idUser = intval($_POST['idUsuario']);

        return $idUser;
    }

    public function getApresentacao()
    {
        if (isset($_POST['apresentacao'])) {
            $apresentacao = $_POST['apresentacao'];
        } else {
            $apresentacao = null;
        }

        return $apresentacao;
    }

    public function getAviso()
    {

        if (isset($_POST['aviso'])) {
            $aviso = $_POST['aviso'];
        } else {
            $aviso = null;
        }

        return $aviso;
    }

    public function getCartaApresentacao()
    {
        if (isset($_POST['cartaApp'])) {
            $cartaApp =  $_POST['cartaApp'];
        } else {
            $cartaApp = null;
        }

        return $cartaApp;
    }

    public function getAcaoGracas()
    {
        if (isset($_POST['acaoGraca'])) {
            $acaoGraca =  $_POST['acaoGraca'];
        } else {
            $acaoGraca = null;
        }

        return $acaoGraca;
    }

    public function getPedidoOracao()
    {
        if (isset($_POST['pedidoOracao'])) {
            $pedidoOracao = $_FILES['pedidoOracao'];;
        } else {
            $pedidoOracao = null;
        }

        return $pedidoOracao;
    }

    public function getApresentacaoRN()
    {
        if (isset($_POST['apresentacaoRN'])) {
            $appRN = $_POST['apresentacaoRN'];
        } else {
            $appRN = null;
        }

        return $appRN;
    }

    public function salvaFormulario()
    {
        // $Conexao = $this->conectar_banco();

        if (isset($_POST)) {
            $apresentacao = $this->getApresentacao();
            $aviso = $this->getAviso();
            $cartaApp = $this->getCartaApresentacao();
            $acaoGraca = $this->getAcaoGracas();
            $pedidoOracao = $this->getPedidoOracao();
            $appRN = $this->getApresentacaoRN();
            $idUser = $this->getIdUsuario();
        }

        try {
            $conexao = $this->conectar_banco();

            $insert = $conexao->query("INSERT INTO formulario (apresentacao, aviso, cartaApresentacao, acaoGraca, pedidoOracao, apresentacaoRN, inscritorID) 
            VALUES ('$apresentacao', '$aviso', '$cartaApp', '$acaoGraca', '$pedidoOracao',  '$appRN', $idUser)");
            // VALUES ('Gabriel', 1, 1, 'foto.png', 'Gabriel',  'gabriel@Hotmail')");

            header('location: ../view/login.php');
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }
}

$salvarFormulario = new CadastrarFormulario;
$salvarFormulario->salvaFormulario();
