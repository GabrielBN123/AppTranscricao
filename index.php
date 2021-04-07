
<?php  

session_start();

if ((!isset($_SESSION['id']) == true) && (!isset($_SESSION['nome_usuario']) == true)) {

    unset($_SESSION['id']);
    unset($_SESSION['nome_usuario']);

    header("Location:app/controller/login.php");
}
else{
    // header('location: app/view/carregaForm.php');
}


?>