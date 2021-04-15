<?php

require_once('../model/conexao.php');

class Formulario extends Conexao
{

    private $atuacao_usuario = null;
    private $usuarioID = null;
    private $nome_usuario = null;
    private $instituicao = null;
    private $loader = null;
    private $form = null;
    private $baseModel = null;
    private $baseChat = null;

    public function __construct()
    {
        $this->baseModel = $_SERVER['DOCUMENT_ROOT'] .  '/AppTranscricao/';

        require('config.php');

        require($this->baseModel . 'app/model/formulario_model.php');

        $this->loader = new Config;
        $this->form = new Formulario_model;

        // valida se já está logado, falta iniciar
        session_start();

        if ((isset($_SESSION['id']) == true) && (isset($_SESSION['nome_usuario']) == true)) {
            // header("Location:formulario.php");
        }

        $this->atuacao_usuario = $_SESSION['atuacao'];
        $this->usuarioID = $_SESSION['id'];
        $this->nome_usuario = $_SESSION['nome_usuario'];
        $this->instituicao = $_SESSION['instituicao'];
    }

    public function carregaFormulario()
    {

        switch ($this->atuacao_usuario) {
            case '1':
                $pagina_formulario = 'recepcao.php';

                break;

            case '2':
                $pagina_formulario = 'transcricao.php';

                break;

            case '3':
                $pagina_formulario = 'pulpito.php';

                break;

            default:
                $pagina_formulario = 'error.php';
                break;
        }
        return $pagina_formulario;
    }

    public function salvarAlteracaoForm()
    {


        isset($_POST['apresentacao']) ? $this->form->setApresentacao($_POST['apresentacao']) : $this->form->setApresentacao(null);
        isset($_POST['aviso']) ? $this->form->setAvisos($_POST['aviso']) : $this->form->setAvisos(null);
        isset($_POST['cartaApp']) ? $this->form->setCartaApresentacao($_POST['cartaApp']) : $this->form->setCartaApresentacao(null);
        isset($_POST['acaoGraca']) ? $this->form->setAcaoGraca($_POST['acaoGraca']) : $this->form->setAcaoGraca(null);
        isset($_POST['pedidoOracao']) ? $this->form->setPedidoOracao($_POST['pedidoOracao']) : $this->form->setPedidoOracao(null);
        isset($_POST['apresentacaoRN']) ? $this->form->setApresentaRN($_POST['apresentacaoRN']) : $this->form->setApresentaRN(null);

        isset($_POST['felicitacao']) ? $this->form->setFelicitacao($_POST['felicitacao']) : $this->form->setPedidoLouvor(null);
        isset($_POST['pedidoLouvor']) ? $this->form->setPedidoLouvor($_POST['pedidoLouvor']) : $this->form->setPedidoLouvor(null);
        isset($_POST['pedidoComunhao']) ? $this->form->setPedidoComunhao($_POST['pedidoComunhao']) : $this->form->setPedidoComunhao(null);


        $this->form->setFormID($_POST['formID']);
        $this->form->setUsuarioAlteradoID($_POST['transc_usuarioID']);

        $this->form->salvaAlteracaoFormulario();
    }

    public function logout()
    {
        session_start();
        session_destroy();

        header('location:login.php');
    }

    public function criaNovoFormulario()
    {
        $this->form->setIdUsuario($_SESSION['id']);
        $this->form->setApresentacao($_POST['apresentacao']);
        $this->form->setAvisos($_POST['aviso']);
        $this->form->setCartaApresentacao($_POST['cartaApp']);
        $this->form->setAcaoGraca($_POST['acaoGraca']);
        $this->form->setPedidoOracao($_POST['pedidoOracao']);
        $this->form->setApresentaRN($_POST['apresentacaoRN']);
        $this->form->setFelicitacao($_POST['felicitacoes']);
        $this->form->setPedidoLouvor($_POST['pedidoLouvor']);
        $this->form->setPedidoComunhao($_POST['pedidoComunhao']);
        $this->form->setInstituicao($_POST['instituicao']);

        $this->form->criaFormulario();
    }

    public function chat()
    {
        $this->baseChat = $_SERVER['DOCUMENT_ROOT'] .  '/AppTranscricao/app/controller/chat/';

        require $this->baseChat . 'Chat.php';
    }

    public function index($pagina)
    {
        $this->loader->loadCSS('bootstrap.min.css');
        $this->loader->loadCSS('css.css');
        $this->loader->loadCSS('all.css');
        $this->loader->loadCSS('css_formulario.css');

        $this->loader->loadJS('all.js');
        $this->loader->loadJS('jquery-3.5.1.min.js');
        $this->loader->loadJS('chat.js');
        $this->loader->loadJS('pulpito.js');

        if (isset($_POST['cadastrarFormulario'])) {
            if ($_POST['cadastrarFormulario'] == 'Sim') {
                $this->criaNovoFormulario();
            }
        }

        if (isset($_POST['salvarAlteracao'])) {
            if ($_POST['salvarAlteracao'] == 'Sim') {
                $this->salvarAlteracaoForm();
            }
        }

        if (isset($_GET['sair'])) {
            if ($_GET['sair'] == 'Sim') {
                $this->logout();
            }
        }
        if ($this->atuacao_usuario != '1') {
            $this->chat();
        }

        include($this->loader->loadViewBase() . "app/view/$pagina");
    }
}

$load = new Formulario;
$load->index('formulario.php');
