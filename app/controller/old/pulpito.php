<?php

class Pulpito
{
    public function __construct()
    {
        session_start();

        if ((!isset($_SESSION['id']) == true) && (!isset($_SESSION['nome_usuario']) == true)) {

            unset($_SESSION['id']);
            unset($_SESSION['nome_usuario']);

            // header("Location:../view/login.php");
        }

        $usuarioID = $_SESSION['id'];
        $nome_usuario = $_SESSION['nome_usuario'];
        $atuacao_usuario = $_SESSION['atuacao'];
        $instituicao = $_SESSION['instituicao'];

        // include($this->basePath . 'view/carregaForm.php');
        // include('../view/login.php');

        // echo 'teste bem sucedido';
        // echo $_SERVER['SERVER_NAME'];

        $indicesServer = array('PHP_SELF',
'argv',
'argc',
'GATEWAY_INTERFACE',
'SERVER_ADDR',
'SERVER_NAME',
'SERVER_SOFTWARE',
'SERVER_PROTOCOL',
'REQUEST_METHOD',
'REQUEST_TIME',
'REQUEST_TIME_FLOAT',
'QUERY_STRING',
'DOCUMENT_ROOT',
'HTTP_ACCEPT',
'HTTP_ACCEPT_CHARSET',
'HTTP_ACCEPT_ENCODING',
'HTTP_ACCEPT_LANGUAGE',
'HTTP_CONNECTION',
'HTTP_HOST',
'HTTP_REFERER',
'HTTP_USER_AGENT',
'HTTPS',
'REMOTE_ADDR',
'REMOTE_HOST',
'REMOTE_PORT',
'REMOTE_USER',
'REDIRECT_REMOTE_USER',
'SCRIPT_FILENAME',
'SERVER_ADMIN',
'SERVER_PORT',
'SERVER_SIGNATURE',
'PATH_TRANSLATED',
'SCRIPT_NAME',
'REQUEST_URI',
'PHP_AUTH_DIGEST',
'PHP_AUTH_USER',
'PHP_AUTH_PW',
'AUTH_TYPE',
'PATH_INFO',
'ORIG_PATH_INFO') ;

        // echo '<table cellpadding="10">';
        // foreach ($indicesServer as $arg) {
        //     if (isset($_SERVER[$arg])) {
        //         echo '<tr><td>' . $arg . '</td><td>' . $_SERVER[$arg] . '</td></tr>';
        //     } else {
        //         echo '<tr><td>' . $arg . '</td><td>-</td></tr>';
        //     }
        // }
        // echo '</table>';

        

    }

}
$teste = new Pulpito;
