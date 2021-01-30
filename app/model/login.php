<?php

require("conexao.php");

// $email = $_POST['email'];
// $senha = ($_POST['senha']);

class Login extends Conexao
{
    public function getEmail()
    {
        $email = $_POST['email'];

        return $email;

    }

    public function getSenha()
    {
        $senha = ($_POST['senha']);

        return $senha;
    }

    
    public function verifica()
    {
        if (isset($_POST)) {
            $email = $this->getEmail();
            $senha = $this->getSenha();
            
            try {
                $conexao = $this->conectar_banco();
                
                $select = $conexao->query("SELECT * FROM usuarios WHERE senha_usuario = '$senha' AND email_usuario = '$email' ");
                
                // if ($select->num_rows <= 0){
                if ($select->rowCount() <= 0){
                ?>
                <script language='javascript' type='text/javascript'> 
                        alert('E-mail e/ou senha incorretos');
                        window.location.href='../view/login.php';
                </script>
                <?php
                die();
              }else{
                  foreach ($select as $key) {
                      $nomeUsuario = $key['nome_usuario'];
                      $id = $key['userID'];
                      $areaAtua = $key['area_atuaID'];
                      $instituicao = $key['instituicaoID'];
                    }
                    setcookie("ID", $id);
                    // echo $_COOKIE['ID'];
                    // header("Location: ../view/funcao.php");
                    include('../view/funcao.php');
                }
            }catch(PDOException $e){
                
                echo 'Erro: ' . $e->getMessage();
            }
        }else{
            echo 'Erro sem POST detectado';
        }
    }

}
$login = new Login;
$login->verifica();

?>
