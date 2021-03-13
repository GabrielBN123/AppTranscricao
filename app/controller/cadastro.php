<?php

require_once('../model/conexao.php');

class Cadastro extends Conexao
{

    public function __construct()
    {
        // valida se já está logado

    }

    public function index()
    {
        $title = "Cadastro";
        
        include('config.php');

        $loader = new Config;
        
        $loader->loadCSS('bootstrap.min.css');
        $loader->loadCSS('css.css');
        $loader->loadCSS('all.css');

        $baseUrl = $loader->baseUrl();

        $loader->loadView('cadastro.php');
    }
}

$load = new Cadastro;
$load->index();
