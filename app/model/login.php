<?php

require("conexao.php");


class Login extends Conexao
{
    private $email = null;
    private $senha = null;

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function verifica()
    {
        if ($this->getEmail() != null && $this->getSenha() != null) {
            try {
                session_start();
                $select = $this->con()->prepare('SELECT * FROM usuarios WHERE email_usuario=:email and binary senha_usuario=:senha');
                $select->bindValue(':email', $this->getEmail(), PDO::PARAM_STR);
                $select->bindValue(':senha', $this->getSenha(), PDO::PARAM_STR);
                if ($select->execute() && count($select->fetchAll()) > 0) {
                    echo 'Logado com sucesso!';

                    $select->execute();

                    foreach ($select as $key) {
                        $nome = $key['nome_usuario'];
                        $ID = $key['userID'];
                        $atuacao = $key['area_atuaID'];
                        $instituicao = $key['area_atuaID'];
                    }
                    $_SESSION['id'] = $ID;
                    $_SESSION['nome_usuario'] = $nome;
                    $_SESSION['atuacao'] = $atuacao;
                    $_SESSION['instituicao'] = $instituicao;

                    // echo $_SESSION['id'] . '<br>';
                    // echo $_SESSION['nome_usuario'];

                    // header('location: ../view/funcao.php');
                    header('location: ../view/carregaForm.php');
                } else {
                    echo 'Usuário não encontrado!';
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        } else {
            echo 'Login ou senha vazios.';
            echo "<br> Email    : " . $this->getEmail();
            echo "<br> POST Email: " . $_POST['email'];
            echo "<br> Senha: " . $this->getSenha();
            echo "<br> POST Senha: " . $_POST['senha'];
        }
    }
}

$login = new Login();
$login->setEmail($_POST['email']);
$login->setSenha($_POST['senha']);
$login->verifica();
