<?php

class Usuario_model extends Conexao
{
    // variavel da classe Conexao
    // protected $conexao = $this->conect;

    private $nome = null;
    private $area_atua = null;
    private $instituicao = null;
    private $senha = null;
    private $email = null;
    private $nome_imagem = null;


    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setArea($area_atua)
    {
        $this->area_atua = $area_atua;
    }

    public function setInstituicao($instituicao)
    {
        $this->instituicao =  intval( $instituicao);
    }

    public function setFoto()
    {
        $this->nome_imagem = md5(uniqid(time())) . "." . 'png';;
    }

    public function setSenha()
    {
        $this->senha = preg_replace("/\s+/", "", $this->nome);
        $this->senha = strtolower($this->senha);
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    // passa os dados
    public function getNome()
    {
        return  $this->nome;
    }

    public function getArea()
    {
        return  $this->area_atua;
    }

    public function getInstituicao()
    {
        return  $this->instituicao;
    }

    public function getFoto()
    {
        return  $this->nome_imagem;
    }

    public function getSenha()
    {
        return  $this->senha;
    }

    public function getEmail()
    {
        return  $this->email;
    }

    public function moveFoto()
    {
        $imagem = $_FILES['Foto'];

        $caminho_imagem = "../../assets/img/foto_usuario/teste/" . $this->nome_imagem;

        move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
    }

    public function cadastraUsuario()
    {

        if ($this->getNome() != null && $this->getEmail() != null) {
            echo 'Foto: ' . $this->getFoto() . '<br>';
            try {
                $insert = $this->con()->prepare("INSERT INTO usuarios (nome_usuario, area_atuaID, instituicaoID, foto_usuario, senha_usuario, email_usuario)
                    VALUES (:nome, :areaAtua, :instituto, :foto, :senha, :email)"
                );
                $insert->bindValue(':nome', $this->getNome(), PDO::PARAM_STR);
                $insert->bindValue(':areaAtua', $this->getArea(), PDO::PARAM_INT);
                $insert->bindValue(':instituto', $this->getInstituicao(), PDO::PARAM_INT);
                $insert->bindValue(':foto', $this->getFoto(), PDO::PARAM_STR);
                $insert->bindValue(':senha', $this->getSenha(), PDO::PARAM_STR);
                $insert->bindValue(':email', $this->getEmail(), PDO::PARAM_STR);

                if ($insert->execute()) {
                    echo 'Inserido com Sucesso';
                    $this->moveFoto();
                    // header('location: ../view/login.php');
                } else {
                    echo 'Não cadastrado, Favor Tentar Novamente!';
                }
                // header('location: ../view/login.php');
            } catch (PDOException $e) {
                echo 'Erro: ' . $e->getMessage();
            }
        } else {
            echo 'Ocorreu um erro <br>';
            echo '<a href="javascript: history.go(-1)">Retornar</a>';
        }
    }

    public function carregaCamposCadastro()
    {
        $stmt = $this->con()->prepare('select * from campo where exibe = 1');
        $stmt->execute();
        $dados = $stmt->fetchAll();
        foreach($dados as $value){
            echo "<option value={$value['campoID']}>{$value['nome_campo']}</option>";
        }
    }

    public function carregaInstituicoes()
    {
        $stmt = $this->con()->prepare('select * from instituicao');
        $stmt->execute();
        $dados = $stmt->fetchAll();
        foreach($dados as $value){
            echo "<option value={$value['instituicaoID']}>{$value['decricao_instituicao']}</option>";
        }
    }
}
// $usuario = new Usuario;

// $usuario->setNome($_POST['nome']);
// $usuario->setArea($_POST['area_atuacao']);
// $usuario->setInstituicao($_POST['instituicao']);
// $usuario->setEmail($_POST['email']);
// $usuario->setFoto();
// $usuario->setSenha();

// $usuario->cadastra();
