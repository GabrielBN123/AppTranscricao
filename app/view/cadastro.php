<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar</title>
    <?php include('../controller/carregar_js_css.php'); ?>
</head>

<body>
    <div class="fundo">
    </div>
    <div class="row h-100 painel_log_cadastro col-md-12 col-lg-4">
        <div class="corpo_cadastro tela_log_cad bg-light col-md-12">
            <div class="titulo my-5">
                <h1 class="titulo_h1_cadastro">Cadastro</h1>
            </div>
            <div class="form my-5 mx-5">
                <form action="../controller/cadastrar.php" method="POST" enctype="multipart/form-data">
                    <div class="input_div">
                        <label for="foto" class="label_foto">
                            <div class="div_foto rounded-circle">
                                <img src="<?php echo baseURl?>assets/img/user-regular.svg" alt=" " class="rounded-circle show_image_up" id="show_foto" alt="">
                            </div>
                            Foto
                        </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
                        <input type="file" class="input_foto" onchange="loadFile(event)" name="Foto" accept="image/x-png,image/gif,image/jpeg" id="foto">
                    </div>
                    <div class="input_div form-group">
                        <label for="nome" class="label_cadastro">Nome</label>
                        <br>
                        <input class="form-control mt-2 form-control-lg" name="nome" type="text" id="nome" placeholder="nome" aria-label=".form-control-lg example">
                    </div>
                    <div class="input_div form-group">
                        <label for="atuacao" class="label_cadastro">Área de atuação</label>
                        <br>
                        <select class="form-select mt-2 form-select-lg" name="area_atuacao" id="atuacao" aria-label="Default select example">
                            <option selected value="1">Recepção</option>
                            <option value="2">Transcrição</option>
                            <option value="3">Pulpito</option>
                        </select>
                    </div>
                    Já é Cadastrado? <a href="../index.php">Entrar</a>
                    <br><br>
                    <input type="submit" value="Cadastrar" class="input_btn">
                </form>
            </div>
        </div>
    </div>
    <script src="../js/js_cadastro.js"></script>
</body>

</html>