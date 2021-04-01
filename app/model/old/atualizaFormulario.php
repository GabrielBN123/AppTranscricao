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
    private $felicitacao = null;
    private $pedidoLouvor = null;
    private $pedidoComunhao = null;


    private $formID = null;
    private $alterado = 1;
    private $idUsuarioTranscricao = null;

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

    public function setFormID($formID)
    {
        $this->formID = intval($formID);
    }

    public function setUsuarioAlteradoID($idUsuarioTranscricao)
    {
        $this->idUsuarioTranscricao = intval($idUsuarioTranscricao);
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

    public function getFormID()
    {
        return $this->formID;
    }

    public function getAlterado()
    {
        return $this->alterado;
    }

    public function getUsuarioAlteradoID()
    {
        return $this->idUsuarioTranscricao;
    }

    public function salvaFormulario()
    {
        // $Conexao = $this->conectar_banco();

        try {
            $insertForm = $this->con()->prepare(
                "UPDATE formulario SET 
                apresentacaoVisitante = :apresentacao,
                aviso = :aviso, 
                cartaApresentacao = :cartaApresentacao, 
                acaoGraca = :acaoGraca, 
                pedidoOracao = :pedidoOracao,
                felicitacoes = :felicitacao,
                pedidoLouvor = :louvor,
                pedidoComunhao = :pedidoComunhao,
                apresentacaoRN = :apresentacaoRN,
                transcricao_ok = :alterado,
                alterado_por_usuario = :alterado_por
                WHERE formID = :idFormulario "
            );
            $insertForm->bindValue(':apresentacao', $this->getApresentacao(), PDO::PARAM_STR);
            $insertForm->bindValue(':aviso', $this->getAviso(), PDO::PARAM_STR);
            $insertForm->bindValue(':cartaApresentacao', $this->getCartaApresentacao(), PDO::PARAM_STR);
            $insertForm->bindValue(':acaoGraca', $this->getAcaoGracas(), PDO::PARAM_STR);
            $insertForm->bindValue(':pedidoOracao', $this->getPedidoOracao(), PDO::PARAM_STR);
            $insertForm->bindValue(':apresentacaoRN', $this->getApresentacaoRN(), PDO::PARAM_STR);

            $insertForm->bindValue(':felicitacao', $this->getFelicitacao(), PDO::PARAM_STR);
            $insertForm->bindValue(':louvor', $this->getPedidoLouvor(), PDO::PARAM_STR);
            $insertForm->bindValue(':pedidoComunhao', $this->getPedidoComunhao(), PDO::PARAM_STR);

            $insertForm->bindValue(':idFormulario', $this->getFormID(), PDO::PARAM_INT);
            $insertForm->bindValue(':alterado', $this->getAlterado(), PDO::PARAM_INT);
            $insertForm->bindValue(':alterado_por', $this->getUsuarioAlteradoID(), PDO::PARAM_INT);

            if ($insertForm->execute()) {
                echo 'Salvo com Sucesso';
                $_POST['btnSelecao'] = 'form_Transcricao';
                // echo $this->getFormID();
                header('location: ../view/carregaForm.php');
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

isset($_POST['apresentacao']) ? $attFormulario->setApresentacao($_POST['apresentacao']) : $attFormulario->setApresentacao(null);
isset($_POST['aviso']) ? $attFormulario->setAvisos($_POST['aviso']) : $attFormulario->setAvisos(null);
isset($_POST['cartaApp']) ? $attFormulario->setCartaApresentacao($_POST['cartaApp']) : $attFormulario->setCartaApresentacao(null);
isset($_POST['acaoGraca']) ? $attFormulario->setAcaoGraca($_POST['acaoGraca']) : $attFormulario->setAcaoGraca(null);
isset($_POST['pedidoOracao']) ? $attFormulario->setPedidoOracao($_POST['pedidoOracao']) : $attFormulario->setPedidoOracao(null);
isset($_POST['apresentacaoRN']) ? $attFormulario->setApresentaRN($_POST['apresentacaoRN']) : $attFormulario->setApresentaRN(null);

isset($_POST['felicitacao']) ? $attFormulario->setFelicitacao($_POST['felicitacao']) : $attFormulario->setPedidoLouvor(null);
isset($_POST['pedidoLouvor']) ? $attFormulario->setPedidoLouvor($_POST['pedidoLouvor']) : $attFormulario->setPedidoLouvor(null);
isset($_POST['pedidoComunhao']) ? $attFormulario->setPedidoComunhao($_POST['pedidoComunhao']) : $attFormulario->setPedidoComunhao(null);

$attFormulario->setFormID($_POST['formID']);
$attFormulario->setUsuarioAlteradoID($_POST['transc_usuarioID']);




// $attFormulario->setApresentacao(isset($_POST['apresentacao']) ? $_POST['apresentacao']:null);
// $attFormulario->setAvisos(isset($_POST['aviso']) ? $_POST['aviso']:null);
// $attFormulario->setAcaoGraca(isset($_POST['acaoGraca']) ? $_POST['acaoGraca']:null);
// $attFormulario->setPedidoOracao(isset($_POST['pedidoOracao']) ? $_POST['pedidoOracao']:null);
// $attFormulario->setApresentaRN(isset($_POST['apresentacaoRN']) ? $_POST['apresentacaoRN']:null);

$attFormulario->salvaFormulario();
