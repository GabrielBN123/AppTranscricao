<?php

require_once('../model/conexao.php');

class Formulario extends Conexao
{

    private $atuacao_usuario = null;
    private $usuarioID = null;
    private $nome_usuario = null;
    private $instituicao = null;

    public function __construct()
    {
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
                $teste = 'recepcao.php';

                break;

            case '2':
                $teste = 'transcricao.php';

                break;

            case '3':
                $teste = 'pulpito.php';

                break;

            default:
                $teste = 'error.php';
                break;
        }
        return $teste;
    }

    public function salvarAlteracaoForm()
    {
        $form = new Formulario_model;

        isset($_POST['apresentacao']) ? $form->setApresentacao($_POST['apresentacao']) : $form->setApresentacao(null);
        isset($_POST['aviso']) ? $form->setAvisos($_POST['aviso']) : $form->setAvisos(null);
        isset($_POST['cartaApp']) ? $form->setCartaApresentacao($_POST['cartaApp']) : $form->setCartaApresentacao(null);
        isset($_POST['acaoGraca']) ? $form->setAcaoGraca($_POST['acaoGraca']) : $form->setAcaoGraca(null);
        isset($_POST['pedidoOracao']) ? $form->setPedidoOracao($_POST['pedidoOracao']) : $form->setPedidoOracao(null);
        isset($_POST['apresentacaoRN']) ? $form->setApresentaRN($_POST['apresentacaoRN']) : $form->setApresentaRN(null);

        isset($_POST['felicitacao']) ? $form->setFelicitacao($_POST['felicitacao']) : $form->setPedidoLouvor(null);
        isset($_POST['pedidoLouvor']) ? $form->setPedidoLouvor($_POST['pedidoLouvor']) : $form->setPedidoLouvor(null);
        isset($_POST['pedidoComunhao']) ? $form->setPedidoComunhao($_POST['pedidoComunhao']) : $form->setPedidoComunhao(null);

        $form->setFormID($_POST['formID']);
        $form->setUsuarioAlteradoID($_POST['transc_usuarioID']);

        $form->salvaAlteracaoFormulario();
    }

    public function logout()
    {
        session_start();
        session_destroy();

        header('location:login.php');
    }

    public function criaNovoFormulario()
    {
        $form = new Formulario_model;

        $form->setIdUsuario($_SESSION['id']);
        $form->setApresentacao($_POST['apresentacao']);
        $form->setAvisos($_POST['aviso']);
        $form->setCartaApresentacao($_POST['cartaApp']);
        $form->setAcaoGraca($_POST['acaoGraca']);
        $form->setPedidoOracao($_POST['pedidoOracao']);
        $form->setApresentaRN($_POST['apresentacaoRN']);

        $form->setFelicitacao($_POST['felicitacoes']);
        $form->setPedidoLouvor($_POST['pedidoLouvor']);
        $form->setPedidoComunhao($_POST['pedidoComunhao']);

        $form->setInstituicao($_POST['instituicao']);
        $form->criaFormulario();
    }

    public function index($pagina)
    {
        include('config.php');

        define('baseModel', $_SERVER['DOCUMENT_ROOT'] .  'AppTranscricao/', TRUE);

        include(baseModel . 'app/model/formulario_model.php');

        $loader = new Config;
        $form = new Formulario_model;

        $loader->loadCSS('bootstrap.min.css');
        $loader->loadCSS('css.css');
        $loader->loadCSS('all.css');
        $loader->loadCSS('css_formulario.css');

        $loader->loadJS('all.js');
        $loader->loadJS('jquery-3.5.1.min.js');
        $loader->loadJS('pulpito.js');

        //$loader->baseUrl(); para pegar a base

        // $usuarioID = $_SESSION['id'];
        // $nome_usuario = $_SESSION['nome_usuario'];
        // $instituicao = $_SESSION['instituicao'];

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

        include($loader->loadViewBase() . "app/view/$pagina");
    }
}

$load = new Formulario;
$load->index('carregaForm.php');
