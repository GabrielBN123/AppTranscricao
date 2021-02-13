<?php
include('../model/leituraAttFormulario.php');

$FormLeitura = new Formulario;

// $FormLeitura->selectDados();
?>

<title>Transcrição</title>
<div class="container">
    <div class="row py-5 fundo_img">
        <h2 class="mb-1 rounded bg-light py-3" id="form">Formulário: Transcrição</h2>
        <div class="col-md-12 p-4 bg-light  rounded  corpo_form">
            <div class="col-md-12 col-lg-12">
                <div class="col-md-12">
                    <form action="" method="GET">
                        <div>
                            <select name="idForm" id="">
                                <!-- <option value="null">Selecione o numero do Formulário</option> -->
                                <?php $FormLeitura->quantidadeFormularios();  ?>
                            </select>
                            <button>Pesquisar</button>
                        </div>

                    </form>
                    <div class="row">
                        <form action="../model/atualizaFormulario.php" method="POST">
                            <?php
                            if (isset($_GET['idForm'])) {

                                $FormLeitura->exibirDados($_GET['idForm']);
                            } else {
                                echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro carregado </h1>';
                            }
                            ?>
                            <button class="col-md-12 col-lg-2 my-5 btn btn-primary btn-lg btn_form">Atualizar</button>
                        </form>
                        <!-- <hr> -->
                        <!-- <button class="col-md-12 col-lg-2 btn btn-primary btn-lg btn_form">Próximo</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>