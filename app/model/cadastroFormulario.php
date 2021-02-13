<?php

require("conexao.php");


// echo 'teste';

class CadastrarFormulario extends Conexao
{

    private $idUsuario = null;
    private $apresentacao = null;
    private $aviso = null;
    private $cartaApresenta = null;
    private $acaoGraca = null;
    private $pedidoOracao = null;
    private $apresentaRN = null;
    private $instituicao = null;
    
    private $felicitacao = null;
    private $pedidoLouvor = null;
    private $pedidoComunhao = null;


    
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

    public function setInstituicao($instituicao)
    {
        $this->instituicao = $instituicao;
    }

    public function setFelicitacao($felicitacao)
    {
        $this->felicitacao = $felicitacao;
    }

    public function setPedidoLouvor($pedidoLouvor)
    {
        $this->pedidoLouvor = $pedidoLouvor;
    }

    public function setPedidoComunhao($pedidoComunhao)
    {
        $this->pedidoComunhao = $pedidoComunhao;
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

    public function getFelicitacao()
    {
        return $this->felicitacao;
    }

    public function getPedidoLouvor()
    {
        return $this->pedidoLouvor;
    }

    public function getPedidoComunhao()
    {
        return $this->pedidoComunhao;
    }

    public function getInstituicao()
    {
        return $this->instituicao;
    }

    public function salvaFormulario()
    {
        // $Conexao = $this->conectar_banco();

        try {
            $insertForm = $this->con()->prepare(
                "INSERT INTO formulario (apresentacaoVisitante, aviso, cartaApresentacao, acaoGraca, pedidoOracao, apresentacaoRN, inscritorID, instituicaoID,felicitacoes, pedidoLouvor, pedidoComunhao)
                        VALUES (:apresentacao, :aviso, :cartaApresentacao, :acaoGraca, :pedidoOracao, :apresentacaoRN, :inscritor, :instituicao, :felicitacao, :pedidoLouvor, :pedidoComunhao)"
            );
            $insertForm->bindValue(':apresentacao', $this->getApresentacao(), PDO::PARAM_STR);
            $insertForm->bindValue(':aviso', $this->getAviso(), PDO::PARAM_STR);
            $insertForm->bindValue(':cartaApresentacao', $this->getCartaApresentacao(), PDO::PARAM_STR);
            $insertForm->bindValue(':acaoGraca', $this->getAcaoGracas(), PDO::PARAM_STR);
            $insertForm->bindValue(':pedidoOracao', $this->getPedidoOracao(), PDO::PARAM_STR);
            $insertForm->bindValue(':apresentacaoRN', $this->getApresentacaoRN(), PDO::PARAM_STR);
            $insertForm->bindValue(':felicitacao', $this->getFelicitacao(), PDO::PARAM_STR);
            $insertForm->bindValue(':pedidoLouvor', $this->getPedidoLouvor(), PDO::PARAM_STR);
            $insertForm->bindValue(':pedidoComunhao', $this->getPedidoComunhao(), PDO::PARAM_STR);
            
            $insertForm->bindValue(':inscritor', $this->getIdUsuario(), PDO::PARAM_INT);
            $insertForm->bindValue(':instituicao', $this->getInstituicao(), PDO::PARAM_INT);
            
            if ($insertForm->execute()) {
                echo 'Salvo com Sucesso';
                header('location: ../view/carregaForm.php?id=&btnSelecao=form_Recepcao');
            } else {
                echo 'Formulário não salvo';
            }
            // header('location: ../view/login.php');
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }
}

$salvarFormulario = new CadastrarFormulario;
session_start();
$salvarFormulario->setIdUsuario($_SESSION['id']);
$salvarFormulario->setApresentacao($_POST['apresentacao']);
$salvarFormulario->setAvisos($_POST['aviso']);
$salvarFormulario->setCartaApresentacao($_POST['cartaApp']);
$salvarFormulario->setAcaoGraca($_POST['acaoGraca']);
$salvarFormulario->setPedidoOracao($_POST['pedidoOracao']);
$salvarFormulario->setApresentaRN($_POST['apresentacaoRN']);

$salvarFormulario->setFelicitacao($_POST['felicitacoes']);
$salvarFormulario->setPedidoLouvor($_POST['pedidoLouvor']);
$salvarFormulario->setPedidoComunhao($_POST['pedidoComunhao']);

$salvarFormulario->setInstituicao($_POST['instituicao']);
$salvarFormulario->salvaFormulario();

