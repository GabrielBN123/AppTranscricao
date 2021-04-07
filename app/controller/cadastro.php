<?php

require_once('../model/conexao.php');

class Cadastro extends Conexao
{
    private $loader = null;
    private $user_insert = null;
    private $baseModel = null;

    public function __construct()
    {
        require('config.php');
        
        $this->baseModel = $_SERVER['DOCUMENT_ROOT'] .  '/AppTranscricao/';
        
        require($this->baseModel . 'app/model/cadastro_model.php');
        
        $this->user_insert = new Usuario_model;
        $this->loader = new Config;

        // valida se já está logado, falta iniciar

        session_start();

        if ((isset($_SESSION['id']) == true) && (isset($_SESSION['nome_usuario']) == true)) {
            header("Location:formulario.php");
        }
    }

    public function cadastrar()
    {
        $this->user_insert->setNome($_POST['nome']);
        $this->user_insert->setArea($_POST['area_atuacao']);
        $this->user_insert->setInstituicao($_POST['instituicao']);
        $this->user_insert->setEmail($_POST['email']);
        $this->user_insert->setFoto();
        $this->user_insert->setSenha();

        $this->user_insert->cadastraUsuario();
    }

    public function index($pagina)
    {
        $this->loader->loadCSS('bootstrap.min.css');
        $this->loader->loadCSS('css.css');
        $this->loader->loadCSS('all.css');

        $this->loader->loadJS('jquery-3.5.1.min.js');
        $this->loader->loadJS('all.js');
        $this->loader->loadJS('cadastro.js');

        //$loader->baseUrl(); para pegar a base

        if (isset($_POST['cadastrar'])) {
            if ($_POST['cadastrar'] == 'Cadastrar')
                $this->cadastrar();
            header('location: login.php');
        }

        include($this->loader->loadViewBase() . "app/view/$pagina");
    }
}

$load = new Cadastro;
$load->index('cadastro.php');
