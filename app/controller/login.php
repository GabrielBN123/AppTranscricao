<?php

require_once('../model/conexao.php');

class Login extends Conexao
{
    private $user_login = null;
    private $loader = null;
    private $baseModel = null;

    public function __construct()
    {
        require('config.php');

        $this->baseModel = $_SERVER['DOCUMENT_ROOT'] .  '/AppTranscricao/';

        require($this->baseModel . 'app/model/login_model.php');

        $this->user_login = new Login_model;
        $this->loader = new Config;

        $this->loader->loadCSS('bootstrap.min.css');

        // valida se já está logado, falta iniciar
        session_start();

        if ((isset($_SESSION['id']) == true) && (isset($_SESSION['nome_usuario']) == true)) {
            header("Location:formulario.php");
        }
    }

    public function logar()
    {
        $this->user_login->setEmail($_POST['email']);
        $this->user_login->setSenha($_POST['senha']);

        $this->user_login->entrar();
    }

    public function index($pagina)
    {
        $this->loader->loadCSS('bootstrap.min.css');
        $this->loader->loadCSS('css.css');
        $this->loader->loadCSS('all.css');

        $this->loader->loadJS('all.js');
        $this->loader->loadJS('jquery-3.5.1.min.js');

        //$this->loader->baseUrl(); para pegar a base

        if (isset($_POST['entrar'])) {
            if ($_POST['entrar'] == 'Entrar')
                $this->logar();
            // header('location: login.php');
        }

        include($this->loader->loadViewBase() . "app/view/$pagina");
    }
}

$load = new Login;
$load->index('login.php');
