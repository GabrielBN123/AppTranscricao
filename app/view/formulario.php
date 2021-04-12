<!DOCTYPE html>
<html lang="pt-br">

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Layssa Matos e Gabriel Batista" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../assets/css/css_formulario.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../assets/img/assembleia-de-deus-logo-5B9F4FA7AB-seeklogo.com.ico" />
</head>

<body>
    <!--formulário-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="?sair=Sim"><i class="fas fa-arrow-circle-left"></i> Sair</a>
            <h2 class="mb-1 rounded bg-light py-3" id="form">Igreja Evangélica Assembléia de Deus Cuiabá </h2>
        </div>
    </nav>
    <div class="tudo">
        <?php
        include("forms/" . $this->carregaFormulario());
        ?>
    </div>
    <button class="btn_chat btn_chat_func"><i class="far fa-comment-dots"></i></button>
    <button class="btn_chat_mobile btn_chat_func_mobile"><i class="far fa-comment-dots"></i></button>

    <!--Footer-->
    <footer class="footer">
        Apptranscrição Copyright &#169; 2020 | Todos os Direitos Reservados | Desenvolvido por Husai Tecnologia CNPJ - 20.166.924/0001-70
    </footer>

    <script src="../../assets/js/chat.js"></script>

</body>

</html>