<?php
include('../model/leituraPulpito.php');
?>

<title>Leitura</title>
<div class="container">
    <div class="row py-5 fundo_img">
        <h2 class="mb-1 rounded bg-light py-3" id="form">Púlpito da Sede</h2>
        <div class="col-md-12 p-4 bg-light  rounded  corpo_form">
            <div class="col-md-12 col-lg-12">
                <div class="col-md-12">
                    <div class="row">
                        <?php
                        $FormLeitura->exibeApresentacao();
                        echo '<hr style="height: 0.5vw;" />';
                        $FormLeitura->exibeAviso();

                        echo '<hr style="height: 0.5vw;" />';
                        $FormLeitura->exibePedidoOracao();

                        echo '<hr style="height: 0.5vw;" />';
                        $FormLeitura->exibeFelicitacao();

                        echo '<hr style="height: 0.5vw;" />';
                        $FormLeitura->exibePedidoLouvor();

                        echo '<hr style="height: 0.5vw;" />';
                        $FormLeitura->exibeAcaoGraca();

                        echo '<hr style="height: 0.5vw;" />';
                        $FormLeitura->exibeApresentacaoRN();

                        echo '<hr style="height: 0.5vw;" />';
                        $FormLeitura->exibePedidoComunhao();

                        echo '<hr style="height: 0.5vw;"/>';
                        $FormLeitura->exibeCartaApresentacao();
                        ?>
                        <hr>
                        <button class="col-md-12 col-lg-2 my-5 btn btn-primary btn-lg btn_form reload_btn">Atualizar <i class="fas fa-sync-alt"></i></button>
                        <!-- <button class="col-md-12 col-lg-2 btn btn-primary btn-lg btn_form">Próximo</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../../assets/js/pulpito.js"></script>
<!-- <script src="../../assets/js/ajax.js"></script> -->