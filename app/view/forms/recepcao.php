<title>Recepção</title>
<div class="container">
    <div class="row py-5 fundo_img">
        <h2 class="mb-1 rounded bg-light py-3" id="form">Formulário: Recepção</h2>
        <div class="col-md-12 p-4 bg-light  rounded  corpo_form">
            <div class="col-md-12 col-lg-12">
                <div class="col-md-12">
                    <form method="post" action="../model/cadastroFormulario.php" class="needs-validation" novalidate>
                        <div class="row">
                            <input type="number" name="idUsuario" id="" value="<?php echo $idUsuario; ?>" hidden>
                            <div class="col-md-12 resp_12 col-lg-6 mb-3">
                                <label for="apre" class="form-label">
                                    <h5>Apresentação</h5>
                                </label>
                                <textarea class="form-control" name="apresentacao" id="apre" placeholder="Apresentação" rows="3"></textarea>
                            </div>

                            <div class="col-md-12 resp_12 col-lg-6">
                                <div class="mb-3">
                                    <label for="avisos" class="form-label">
                                        <h5>Avisos</h5>
                                    </label>
                                    <textarea class="form-control" id="avisos" name="aviso" placeholder="Avisos" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12 resp_12 col-lg-6">
                                <div class="mb-3">
                                    <label for="crt_apresentacao" class="form-label">
                                        <h5>Carta de apresentação</h5>
                                    </label>
                                    <textarea class="form-control" name="cartaApp" id="crt_apresentacao" placeholder="Carta de Apresentação" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12 resp_12 col-lg-6 mb-2">
                                <label for="acao_graças" class="form-label">
                                    <h5>Ação de Graças</h5>
                                </label>
                                <textarea class="form-control" name="acaoGraca" id="acao_graças" placeholder="Ação de Graças" rows="3" required></textarea>
                            </div>

                            <div class="col-md-12 resp_12 col-lg-6 mb-2">
                                <label for="pedido_oracao" class="form-label">
                                    <h5>Pedido de Oração</h5>
                                </label>
                                <textarea class="form-control" name="pedidoOracao" id="pedido_oracao" placeholder="Pedido de Oração" rows="3" required></textarea>
                            </div>

                            <div class="col-md-12 resp_12 col-lg-6 mb-3">
                                <label for="apre_RC" class="form-label ">
                                    <h5>Apresentação de Recém-Nascidos</h5>
                                </label>
                                <textarea class="form-control" name="apresentacaoRN" id="apre_RC" placeholder="Apresentação de Recém-Nascidos" rows="3"></textarea>
                            </div>

                            <hr>
                            <button class="col-md-12 col-lg-2 btn btn-primary btn-lg btn_form" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>