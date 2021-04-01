<title>Transcrição</title>
<div class="container">
    <div class="row py-5 fundo_img">
        <h2 class="mb-1 rounded bg-light py-3" id="form">Transcrição da Sede</h2>
        <div class="col-md-12 p-4 bg-light  rounded  corpo_form">
            <div class="col-md-12 col-lg-12">
                <div class="col-md-12">
                    <form action="" method="GET">
                        <div>
                            <select name="idForm" class="select_formID" id="">
                                <!-- <option value="null">Selecione o numero do Formulário</option> -->
                                <?php $form->quantidadeFormularios();  ?>
                            </select>
                            <button class="btn_selectID"><i class="fas fa-search"></i></button>
                        </div>

                    </form>
                    <div class="row">
                        <form action="" method="POST">
                            <?php
                            if (isset($_GET['idForm'])) {
                                echo "<input type='text' hidden value={$_GET['idForm']}' name='formID'>";
                                echo "<input type='text' hidden value={$this->usuarioID}' name='transc_usuarioID'>";
                                $form->exibirDados($_GET['idForm']);
                            } else {
                                echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro carregado </h1>';
                            }
                            ?>
                            <button class="col-md-12 col-lg-2 my-5 btn btn-primary btn-lg btn_form btn_atualiza_form" value="Sim" name="salvarAlteracao">Enviar</button>
                        </form>
                        <button class="col-md-12 col-lg-2 my-5 btn btn-primary btn-lg btn_form atualiza_pagina">Atualizar <i class="fas fa-sync-alt"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>