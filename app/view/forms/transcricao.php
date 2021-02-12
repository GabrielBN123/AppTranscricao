<?php
include('../model/leituraAttFormulario.php');
?>

<title>Transcrição</title>
<div class="container">
    <div class="row py-5 fundo_img">
        <h2 class="mb-1 rounded bg-light py-3" id="form">Formulário: Transcrição</h2>
        <div class="col-md-12 p-4 bg-light  rounded  corpo_form">
            <div class="col-md-12 col-lg-12">
                <div class="col-md-12">
                    <div class="row">
                        <form action="../model/atualizaFormulario.php" method="POST">
                            <?php
                            $FormLeitura->exibirDados();
                            ?>
                        <button class="col-md-12 col-lg-2 my-5 btn btn-primary btn-lg btn_form">Atualizar</button>
                        </form>
                        <hr>
                        <button class="col-md-12 col-lg-2 btn btn-primary btn-lg btn_form">Próximo</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>