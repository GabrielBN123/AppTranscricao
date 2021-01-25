<!DOCTYPE html>
<html lang="pt-br">

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Layssa Matos e Gabriel Batista" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/css_formulario.css">
    <script src="../assets/js/jquery-3.5.1.min.js"></script>


    <style>
        /* @media screen and (min-width: 1025px) {
            .col-lg-6 {
                flex: 0 0 auto !important;
                width: 50%!important;
            }
        } */
    </style>

    <!-- adicionado modo local -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" -->
    <!-- integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../assets/img/assembleia-de-deus-logo-5B9F4FA7AB-seeklogo.com.ico" />
    <!-- <title>Formulário</title> -->

</head>



<body>
    <!--formulário-->
    <div class="tudo">
        <?php
        if (isset($_POST['btnSelecao'])) {
            $load_form = $_POST['btnSelecao'];

            switch ($load_form) {
                case 'form_Recepcao':
                    echo $load_form;
                    include('forms/recepcao.php');
                    break;

                case 'form_Transcricao':
                    echo $load_form;
                    include('forms/transcricao.php');
                    break;

                case 'form_Pulpito':
                    echo $load_form;
                    include('forms/leitura.php');
                    # code...
                    break;

                default:
                    echo 'Nenhum formulário';
                    break;
            }
        }
        ?>
        <!-- <div class="container">
            <div class="row py-5 fundo_img">
                <h2 class="mb-1 rounded bg-light py-3" id="form">Selecione o Formulário a ser carregado</h2>
                <div class="col-md-12 p-4 bg-light  rounded  corpo_form">
                    <div class="col-md-12 col-lg-12">
                        <div class="col-md-12">
                            <form class="needs-validation" novalidate>
                                <div class="row">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <select name="" id="" class="form-select my-5">
                                                <option value="">Nome do cliente cadastrado</option>
                                            </select>
                                        </div>
                                    </form>
                                    <hr>
                                    <button class="col-md-12 col-lg-2 btn btn-primary btn-lg btn_form" type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <!--Footer-->
    <footer class="footer">
        &#169; Assembleia de Deus
    </footer>



</body>

</html>