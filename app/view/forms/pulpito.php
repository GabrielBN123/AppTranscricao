<title>Leitura</title>
<div class="container">
    <div class="row py-5 fundo_img">
        <h2 class="mb-1 rounded bg-light py-3" id="form">Púlpito da Sede</h2>
        <div class="col-md-12 p-4 bg-light  rounded  corpo_form">
            <div class="col-md-12 col-lg-12">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 caixa_dados_pulpito">
                            <h5 class="dropdown_btn">Apresentação de Visitante<span class="dropdown_btn"><i class="far fa-arrow-alt-circle-down"></i></span></h5>
                            <hr />
                            <div class="dropdown_pulpito campo_exibe_pulpito">
                                <?php
                                // $this->formLeitura->exibeDados('apresentacaoVisitante', 'apresentacao');
                                // echo '<hr>';
                                $this->form->exibeApresentacao();
                                ?>
                            </div>
                        </div>
                        <!-- <hr style="height: 0.5vw;" /> -->
                        <div class="col-md-12 caixa_dados_pulpito">
                            <h5 class="dropdown_btn">Avisos<span class="dropdown_btn"><i class="far fa-arrow-alt-circle-down"></i></span></h5>
                            <hr />
                            <div class="dropdown_pulpito campo_exibe_pulpito">
                                <?php
                                $this->form->exibeAviso();
                                ?>
                            </div>
                        </div>
                        <!-- <hr style="height: 0.5vw;" /> -->
                        <div class="col-md-12 caixa_dados_pulpito">
                            <h5 class="dropdown_btn">Pedido de Oração<span class="dropdown_btn"><i class="far fa-arrow-alt-circle-down"></i></span></h5>
                            <hr />
                            <div class="dropdown_pulpito campo_exibe_pulpito">
                                <?php
                                $this->form->exibePedidoOracao();
                                ?>
                            </div>
                        </div>
                        <!-- <hr style="height: 0.5vw;" /> -->
                        <div class="col-md-12 caixa_dados_pulpito">
                            <h5 class="dropdown_btn">Felicitações<span class="dropdown_btn"><i class="far fa-arrow-alt-circle-down"></i></span></h5>
                            <hr />
                            <div class="dropdown_pulpito campo_exibe_pulpito">
                                <?php
                                $this->form->exibeFelicitacao();
                                ?>
                            </div>
                        </div>
                        <!-- <hr style="height: 0.5vw;" /> -->
                        <div class="col-md-12 caixa_dados_pulpito">
                            <h5 class="dropdown_btn">Pedido de Louvor<span class="dropdown_btn"><i class="far fa-arrow-alt-circle-down"></i></span></h5>
                            <hr />
                            <div class="dropdown_pulpito campo_exibe_pulpito">
                                <?php
                                $this->form->exibePedidoLouvor();
                                ?>
                            </div>
                        </div>
                        <!-- <hr style="height: 0.5vw;" /> -->
                        <div class="col-md-12 caixa_dados_pulpito">
                            <h5 class="dropdown_btn">Ação de Graças<span class="dropdown_btn"><i class="far fa-arrow-alt-circle-down"></i></span></h5>
                            <hr />
                            <div class="dropdown_pulpito campo_exibe_pulpito">
                                <?php
                                $this->form->exibeAcaoGraca();
                                ?>
                            </div>
                        </div>
                        <!-- <hr style="height: 0.5vw;" /> -->
                        <div class="col-md-12 caixa_dados_pulpito">
                            <h5 class="dropdown_btn">Apresentação de Recém-Nascidos<span class="dropdown_btn"><i class="far fa-arrow-alt-circle-down"></i></span></h5>
                            <hr />
                            <div class="dropdown_pulpito campo_exibe_pulpito">
                                <?php
                                $this->form->exibeApresentacaoRN();
                                ?>
                            </div>
                        </div>
                        <!-- <hr style="height: 0.5vw;" /> -->
                        <div class="col-md-12 caixa_dados_pulpito">
                            <h5 class="dropdown_btn">Pedido de Comunhão<span class="dropdown_btn"><i class="far fa-arrow-alt-circle-down"></i></span></h5>
                            <hr />
                            <div class="dropdown_pulpito campo_exibe_pulpito">
                                <?php
                                $this->form->exibePedidoComunhao();
                                ?>
                            </div>
                        </div>
                        <!-- <hr style="height: 0.5vw;" /> -->
                        <div class="col-md-12 caixa_dados_pulpito">
                            <h5 class="dropdown_btn">Carta de apresentação <span class="dropdown_btn"><i class="far fa-arrow-alt-circle-down"></i></span> </h5>
                            <hr />
                            <div class="dropdown_pulpito campo_exibe_pulpito">
                                <?php
                                $this->form->exibeCartaApresentacao();
                                ?>
                            </div>
                        </div>
                        <hr>
                        <button class="col-md-12 col-lg-2 my-5 btn btn-primary btn-lg btn_form reload_btn">Atualizar <i class="fas fa-sync-alt"></i></button>
                        <!-- <button class="col-md-12 col-lg-2 btn btn-primary btn-lg btn_form">Próximo</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>