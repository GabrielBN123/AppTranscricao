<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar Instituição</title>
    <?php include('../controller/carregar_js_css.php'); ?>
</head>

<body>
    <div class="fundo">
    </div>
    <div class="row h-100 painel_log_cadastro painel_log_login col-md-12 col-lg-4">
        <div class="corpo_cadastro tela_log_cad bg-light col-md-12">
            <div class="titulo my-5">
                <h1 class="titulo_h1_cadastro">Cadastro de Instituição</h1>
            </div>
            <div class="form my-5 mx-5">
                <form action="../controller/cadastrar.php" method="POST" enctype="multipart/form-data">
                    <div class="input_div form-group">
                        <label for="nome" class="label_cadastro">Nome da Instituição</label>
                        <br>
                        <input class="form-control mt-2 form-control-lg" name="nome" type="text" id="nome" placeholder="Nome da instituição" aria-label=".form-control-lg example">
                    </div>
                    <div class="input_div form-group">
                        <label for="nome" class="label_cadastro">Descrição</label>
                        <br>
                        <input class="form-control mt-2 form-control-lg" name="nome" type="text" id="nome" placeholder="Descrição" aria-label=".form-control-lg example">
                    </div>
                    <br><br>
                    <input type="submit" value="Cadastrar" class="input_btn">
                </form>
            </div>
        </div>
    </div>
    <script src="../js/js_cadastro.js"></script>
</body>

</html>