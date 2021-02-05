<?php

require("conexao.php");

class attFormulario extends Conexao
{

    private $idUsuario = null;
    private $apresentacao = null;
    private $aviso = null;
    private $cartaApresenta = null;
    private $acaoGraca = null;
    private $pedidoOracao = null;
    private $apresentaRN = null;
    private $formID = null;

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    public function setApresentacao($apresentacao)
    {
        $this->apresentacao = $apresentacao;
    }

    public function setAvisos($aviso)
    {
        $this->aviso = $aviso;
    }

    public function setCartaApresentacao($cartaApresenta)
    {
        $this->cartaApresenta = $cartaApresenta;
    }

    public function setAcaoGraca($acaoGraca)
    {
        $this->acaoGraca = $acaoGraca;
    }

    public function setPedidoOracao($pedidoOracao)
    {
        $this->pedidoOracao = $pedidoOracao;
    }

    public function setApresentaRN($apresentaRN)
    {
        $this->apresentaRN = $apresentaRN;
    }
    public function setFormID($formID)
    {
        $this->formID = intval($formID);
    }


    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function getApresentacao()
    {
        return $this->apresentacao;
    }

    public function getAviso()
    {
        return $this->aviso;
    }

    public function getCartaApresentacao()
    {
        return $this->cartaApresenta;
    }

    public function getAcaoGracas()
    {
        return $this->acaoGraca;
    }

    public function getPedidoOracao()
    {
        return $this->pedidoOracao;
    }

    public function getApresentacaoRN()
    {
        return $this->apresentaRN;
    }
    public function getFormID()
    {
        return $this->formID;
    }

    public function salvaFormulario()
    {
        // $Conexao = $this->conectar_banco();

        try {
            $insertForm = $this->conexao()->prepare(
                "UPDATE formulario SET 
                apresentacao = :apresentacao,
                aviso = :aviso, 
                cartaApresentacao = :cartaApresentacao, 
                acaoGraca = :acaoGraca, 
                pedidoOracao = :pedidoOracao,
                apresentacaoRN = :apresentacaoRN
                WHERE formID = :idFormulario "
            );
            $insertForm->bindValue(':apresentacao', $this->getApresentacao(), PDO::PARAM_STR);
            $insertForm->bindValue(':aviso', $this->getAviso(), PDO::PARAM_STR);
            $insertForm->bindValue(':cartaApresentacao', $this->getCartaApresentacao(), PDO::PARAM_STR);
            $insertForm->bindValue(':acaoGraca', $this->getAcaoGracas(), PDO::PARAM_STR);
            $insertForm->bindValue(':pedidoOracao', $this->getPedidoOracao(), PDO::PARAM_STR);
            $insertForm->bindValue(':apresentacaoRN', $this->getApresentacaoRN(), PDO::PARAM_STR);
            // $insertForm->bindValue(':inscritor', $this->getIdUsuario(), PDO::PARAM_STR);
            $insertForm->bindValue(':idFormulario', $this->getFormID(), PDO::PARAM_INT);

            if ($insertForm->execute()) {
                echo 'Salvo com Sucesso';
                $_POST['btnSelecao'] = 'form_Transcricao';
                header('location: ../view/carregaForm.php?id=&btnSelecao=form_Transcricao');
            } else {
                echo 'Formulário não salvo';
            }
            // header('location: ../view/login.php');
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }
}

$attFormulario = new attFormulario;
session_start();
// $attFormulario->setIdUsuario($_SESSION['id']);

isset($_POST['apresentacao']) ? $attFormulario->setApresentacao($_POST['apresentacao']): $attFormulario->setApresentacao(null);
isset($_POST['aviso']) ? $attFormulario->setAvisos($_POST['aviso']): $attFormulario->setAvisos(null);
isset($_POST['cartaApp']) ? $attFormulario->setCartaApresentacao($_POST['cartaApp']): $attFormulario->setCartaApresentacao(null);
isset($_POST['acaoGraca']) ? $attFormulario->setAcaoGraca($_POST['acaoGraca']): $attFormulario->setAcaoGraca(null);
isset($_POST['pedidoOracao']) ? $attFormulario->setPedidoOracao($_POST['pedidoOracao']): $attFormulario->setPedidoOracao(null);
isset($_POST['apresentacaoRN']) ? $attFormulario->setApresentaRN($_POST['apresentacaoRN']): $attFormulario->setApresentaRN(null);
$attFormulario->setFormID($_POST['formID']);



// $attFormulario->setApresentacao(isset($_POST['apresentacao']) ? $_POST['apresentacao']:null);
// $attFormulario->setAvisos(isset($_POST['aviso']) ? $_POST['aviso']:null);
// $attFormulario->setAcaoGraca(isset($_POST['acaoGraca']) ? $_POST['acaoGraca']:null);
// $attFormulario->setPedidoOracao(isset($_POST['pedidoOracao']) ? $_POST['pedidoOracao']:null);
// $attFormulario->setApresentaRN(isset($_POST['apresentacaoRN']) ? $_POST['apresentacaoRN']:null);

$attFormulario->salvaFormulario();
