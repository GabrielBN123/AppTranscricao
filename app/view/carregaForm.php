<!DOCTYPE html>
<html lang="pt-br">

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Layssa Matos e Gabriel Batista" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../controller/carregar_js_css.php'); ?>
    <link rel="stylesheet" href="../../assets/css/css_formulario.css">

    <style>
        /* @media screen and (min-width: 1025px) {
            .col-lg-6 {
                flex: 0 0 auto !important;
                width: 50%!important;
            }
        } */
    </style>

    <!-- adicionado modo local -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" -->
    <!-- integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../assets/img/assembleia-de-deus-logo-5B9F4FA7AB-seeklogo.com.ico" />
    <!-- <title>Formulário</title> -->

</head>

<?php

session_start();


if ((!isset($_SESSION['id']) == true) && (!isset($_SESSION['nome_usuario']) == true)) {

    unset($_SESSION['id']);
    unset($_SESSION['nome_usuario']);

    header("Location:../view/login.php");
}

$usuarioID = $_SESSION['id'];
$nome_usuario = $_SESSION['nome_usuario'];
$atuacao_usuario = $_SESSION['atuacao'];
$instituicao = $_SESSION['instituicao'];
?>


<body>
    <!--formulário-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../model/logout.php"><i class="fas fa-arrow-circle-left"></i> Sair</a>
        </div>
    </nav>
    <div class="tudo">
        <?php

        switch ($atuacao_usuario) {
            case '1':
                # code...
                include('forms/recepcao.php');

                break;

            case '2':
                # code...
                include('forms/transcricao.php');

                break;

            case '3':
                # code...
                include('forms/pulpito.php');

                break;

            default:
                # code...
                break;
        }

        // if (isset($_GET['btnSelecao'])) {
        //     $load_form = $_GET['btnSelecao'];

        //     switch ($load_form) {
        //         case 'form_Recepcao':
        //             // echo $load_form;
        //             include('forms/recepcao.php');
        //             break;

        //         case 'form_Transcricao':
        //             // echo $load_form;
        //             include('forms/transcricao.php');
        //             break;

        //         case 'form_Pulpito':
        //             // echo $load_form;
        //             include('forms/pulpito.php');
        //             # code...
        //             break;

        //         default:
        //             include('forms/recepcao.php');
        //             // echo 'Nenhum formulário';
        //             break;
        //     }
        // } else {
        //     // include('forms/recepcao.php');
        //     echo 'erro';
        // }
        ?>
    </div>
    <!-- <button class="btn_chat"><i class="far fa-comment-dots"></i></button> -->

    <!--Footer-->
    <footer class="footer">
        &#169; Assembleia de Deus
    </footer>

    <script src="../../assets/js/chat.js"></script>

</body>

</html>