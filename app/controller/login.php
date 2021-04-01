<?php

require_once('../model/conexao.php');

class Login extends Conexao
{

    public function __construct()
    {
        // valida se já está logado, falta iniciar
        session_start();

        if ((isset($_SESSION['id']) == true) && (isset($_SESSION['nome_usuario']) == true)) {
            header("Location:formulario.php");
        }
    }

    public function logar()
    {
        $user_login = new Login_model;

        $user_login->setEmail($_POST['email']);
        $user_login->setSenha($_POST['senha']);

        $user_login->entrar();
    }

    public function index($pagina)
    {

        $title = "Cadastro";

        include('config.php');

        define('baseModel', $_SERVER['DOCUMENT_ROOT'] .  'AppTranscricao/', TRUE);

        include(baseModel . 'app/model/login_model.php');

        $loader = new Config;
        $user_login = new Login_model;

        $loader->loadCSS('bootstrap.min.css');
        $loader->loadCSS('css.css');
        $loader->loadCSS('all.css');

        $loader->loadJS('all.js');
        $loader->loadJS('jquery-3.5.1.min.js');

        //$loader->baseUrl(); para pegar a base

        if (isset($_POST['entrar'])) {
            if ($_POST['entrar'] == 'Entrar')
                $this->logar();
            // header('location: login.php');
        }

        include($loader->loadViewBase() . "app/view/$pagina");
    }
}

$load = new Login;
$load->index('login.php');
