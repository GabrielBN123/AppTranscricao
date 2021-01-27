<!DOCTYPE html>
<html>

<head>
<?php
// define('baseURl', 'http://localhost/front/');
define('baseURl', '../../');
 
 ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entrar Transcrição</title>
    <link rel="stylesheet" href="<?php echo baseURl;?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo baseURl;?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo baseURl;?>assets/css/css.css">
    <script src="<?php echo baseURl;?>assets/js/jquery-3.5.1.min.js"></script>
</head>

<body>
    <div class="fundo">
    </div>
    <div class="row h-100 painel_log_cadastro painel_log_login col-md-12 col-lg-4">
        <div class=" tela_log_cad py-5 bg-light col-md-12">
            <div class="titulo my-5">
                <h1 class="titulo_h1_cadastro">Entrar</h1>
            </div>
            <div class="form my-5 mx-5">
                <form action="">
                    <div class="input_div form-group">
                        <label for="nome" class="label_cadastro">Nome</label>
                        <br>
                        <input class="form-control mt-2 form-control-lg" name="nome" type="text" id="nome" placeholder="nome" aria-label=".form-control-lg example">
                    </div>
                    <div class="input_div form-group">
                        <label for="Senha" class="label_cadastro">Senha</label>
                        <br>
                        <input class="form-control mt-2 form-control-lg" name="nome" type="password" id="nome" placeholder="Senha" aria-label=".form-control-lg example">
                    </div>
                    não possui Cadastro? <a href="view/cadastro.php">Cadastrar</a>
                    <br><br>
                    <input type="submit" value="Entrar" class="input_btn">
                </form>
            </div>
        </div>
    </div>
    <script src="js/js_cadastro.js"></script>
</body>

</html>