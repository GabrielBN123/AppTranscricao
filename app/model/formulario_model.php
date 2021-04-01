<?php

class Formulario_model extends Conexao
{
    private $select = null;

    // dados para alteração de formulário
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

    private $instituicao = null;

    private $formID = null;
    private $alterado = 1;
    private $idUsuarioTranscricao = null;

    // Leitura de Formulário
    public function quantidadeFormularios()
    {
        $instituicaoID = $_SESSION['instituicao'];

        $select = $this->con()->prepare('SELECT * FROM formulario where instituicaoID = :instituicaoID');

        $select->bindValue(':instituicaoID', $instituicaoID, PDO::PARAM_INT);

        $select->execute();

        $count = $select->rowCount();

        if ($count > 0) {
            $count = 1;
            foreach ($select as $key) {
                // $key['formID'];
                echo "<option value={$key['formID']}>{$count}</option>";
                $count++;
            }
        } else {
            echo "<option selected value='null'>Não há nenhum Registro há ser exibido</option>";
            // include '../view/.php';
            // echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
        }
    }

    public function getDados()
    {
        return $this->select->execute();
    }

    public function exibirDados($formID)
    {
        $instituicaoID = $_SESSION['instituicao'];

        $select = $this->con()->prepare('SELECT * FROM formulario where instituicaoID = :instituicaoID and formID = :formID');

        $select->bindValue(':instituicaoID', $instituicaoID, PDO::PARAM_INT);
        $select->bindValue(':formID', $formID, PDO::PARAM_INT);


        $select->execute();

        $count = $select->rowCount();

        if ($count > 0) {
            include '../view/forms/exibicaoTranscricao.php';
        } else {
            // include '../view/.php';
            echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
        }
    }

    //----------------------------------------------------------------

    // Atualizar formulário // Transcrição

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

    public function getInstituicao()
    {
        return $this->instituicao;
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

    public function criaFormulario()
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
                header('location: formulario.php');
            } else {
                echo 'Formulário não salvo';
            }
            // header('location: ../view/login.php');
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }

    public function salvaAlteracaoFormulario()
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
                header('location: formulario.php');
            } else {
                echo 'Formulário não salvo';
            }
            // header('location: ../view/login.php');
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }
    // --------------------------------------------------------------------------------

    // pulpito, leitura de arquivo

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
            // echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
            echo '<h1 style="text-align: center;"> Não há nenhum Registro </h1>';
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
            // echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
            echo '<h1 style="text-align: center;"> Não há nenhum Registro </h1>';
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
            // echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
            echo '<h1 style="text-align: center;"> Não há nenhum Registro </h1>';
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
            // echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
            echo '<h1 style="text-align: center;"> Não há nenhum Registro </h1>';
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
            // echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
            echo '<h1 style="text-align: center;"> Não há nenhum Registro </h1>';
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
            // echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
            echo '<h1 style="text-align: center;"> Não há nenhum Registro </h1>';
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
            // echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
            echo '<h1 style="text-align: center;"> Não há nenhum Registro </h1>';
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
            // echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
            echo '<h1 style="text-align: center;"> Não há nenhum Registro </h1>';
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
            // echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
            echo '<h1 style="text-align: center;"> Não há nenhum Registro </h1>';
        }
    }
}
