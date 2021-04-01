<?php

require_once('../model/conexao.php');

class Cadastro extends Conexao
{

    public function __construct()
    {
        // valida se já está logado, falta iniciar

    }

    public function cadastrar()
    {
        $user_insert = new Usuario_model;

        $user_insert->setNome($_POST['nome']);
        $user_insert->setArea($_POST['area_atuacao']);
        $user_insert->setInstituicao($_POST['instituicao']);
        $user_insert->setEmail($_POST['email']);
        $user_insert->setFoto();
        $user_insert->setSenha();

        $user_insert->cadastraUsuario();
    }

    public function index($pagina)
    {
        $title = "Cadastro";

        include('config.php');

        define('baseModel', $_SERVER['DOCUMENT_ROOT'] .  'AppTranscricao/', TRUE);

        include(baseModel . 'app/model/cadastro_model.php');

        $loader = new Config;
        $user_insert = new Usuario_model;

        $loader->loadCSS('bootstrap.min.css');
        $loader->loadCSS('css.css');
        $loader->loadCSS('all.css');

        $loader->loadJS('js_cadastro.js');
        $loader->loadJS('all.js');

        //$loader->baseUrl(); para pegar a base

        if (isset($_POST['cadastrar'])) {
            if($_POST['cadastrar'] == 'Sim')
            $this->cadastrar();
            header('location: login.php');
        }
        
        include($loader->loadViewBase() . "app/view/$pagina");
    }
}

$load = new Cadastro;
$load->index('cadastro.php');
