<?php
    include('../model/leituraPulpito.php');
?>

<title>Leitura</title>
<div class="container">
    <div class="row py-5 fundo_img">
        <h2 class="mb-1 rounded bg-light py-3" id="form">Leitura</h2>
        <div class="col-md-12 p-4 bg-light  rounded  corpo_form">
            <div class="col-md-12 col-lg-12">
                <div class="col-md-12">
                    <div class="row">
                        <?php
                            $FormLeitura->exibirDados();
                        ?>
                        <hr>
                        <button class="col-md-12 col-lg-2 btn btn-primary btn-lg btn_form">Próximo</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>