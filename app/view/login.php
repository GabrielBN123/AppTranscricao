<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entrar Transcrição</title>
    <link rel='shortcut icon' href='<?php echo $this->loader->baseURl(); ?>assets/img/assembleia-de-deus-logo-5B9F4FA7AB-seeklogo.com.ico' />
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
                <form action="" method="POST">
                    <div class="input_div form-group">
                        <label for="nome" class="label_cadastro">E-mail</label>
                        <br>
                        <div class="row">
                            <input class="form-control col-md-12 mt-2 form-control-lg" name="email" type="text" id="nome" placeholder="Email" aria-label=".form-control-lg example">
                        </div>
                    </div>
                    <div class="input_div form-group">
                        <label for="Senha" class="label_cadastro">Senha</label>
                        <br>
                        <div class="row">
                            <div class="col-md-10 col-10 m-0 p-0">
                                <input class="form-control mt-2 form-control-lg senha_class" name="senha" type="password" id="senha" placeholder="Senha" aria-label=".form-control-lg example">

                            </div>
                            <div class="col-md-2 m-0 col-2 px-0 pt-3 div_btn_showPass">
                                <span class="toggle_view_pass btn_view_pass pass_view_on"><i class="far fa-eye"></i></span>
                                <span class="toggle_view_pass btn_view_pass pass_view_off"><i class="far fa-eye-slash"></i></span>

                            </div>
                        </div>
                    </div>
                    não possui Cadastro? <a href="cadastro.php">Cadastrar</a>
                    <br><br>
                    <input type="submit" value="Entrar" name="entrar" class="input_btn">
                </form>
            </div>
        </div>
    </div>
    <script src="../../assets/js/login.js"></script>
</body>

</html>