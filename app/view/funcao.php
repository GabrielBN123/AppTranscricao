<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sua Função</title>
    <?php include('../controller/carregar_js_css.php'); ?>
    <script src="../../assets/js/all.js"></script>
</head>

<?php
session_start();

    // echo $_SESSION['id'];
    // echo $_SESSION['nome_usuario'];

if ((!isset($_SESSION['id']) == true) && (!isset($_SESSION['nome_usuario']) == true)) {
    
    unset($_SESSION['id']);
    unset($_SESSION['nome_usuario']);

    header("Location:../view/login.php");
}

$usuarioID = $_SESSION['id'];
$nome_usuario = $_SESSION['nome_usuario'];


// echo 'ID: ' . $usuarioID . ' . Nome: ' .$nome_usuario; 

?>

<body>
    <div class="fundo_index">
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../model/logout.php"><i class="fas fa-arrow-circle-left"></i> Sair</a>
        </div>
    </nav>
    <div class="container pt-4">
        <div class="row bg-light rounded cont_mobile">
            <div class="col-md-12">
                <div class="row">
                    <form action="../view/carregaForm.php" method="GET">
                        <input type="number" name="id" value="" hidden>
                        <div class="col-12 my-5 text-center btn_recep">
                            <input type="submit" id="form_Recepcao" name="btnSelecao" value="form_Recepcao" hidden>
                            <label for="form_Recepcao" style="width: 100%;">
                                <span class="btn btn-success fs-3 col-12 col-lg-6 btn-lg py-5 px-5 btn_redirec btn_recep">Recepção</span>
                            </label>
                        </div>
                        <div class="col-12 my-5 text-center btn_trasnc">
                            <input type="submit" id="form_Transcricao" name="btnSelecao" value="form_Transcricao" hidden>
                            <label for="form_Transcricao" style="width: 100%;">
                                <span class="btn btn-primary fs-3 col-12 col-lg-6 btn_redirec btn-lg py-5 px-5 btn_trasnc">Transcrição</span>
                            </label>
                        </div>
                        <div class="col-12 my-5 text-center btn_pulp">
                            <input type="submit" id="form_Pulpito" name="btnSelecao" value="form_Pulpito" hidden>
                            <label for="form_Pulpito" style="width: 100%;">
                                <span class="btn btn-info fs-3 col-md-6 col-lg-6 btn_redirec btn-lg py-5 px-5 btn_pulp">Pulpito</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row h-100  col-md-12 col-lg-4">
    </div>
    <script src="js/js_cadastro.js"></script>
</body>

</html>