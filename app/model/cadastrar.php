<?php

require("conexao.php");
// $_FILES é utilizada para a leitura de dados dos arquivos que serão enviados para o servidor. 
// pode destacar os parâmetros “name”, “type”, “size” e “tmp_name”, 
// para passar as informações do nome, tipo, tamanho e um local temporário que é criado quando o arquivo é enviado.

class CadastrarUsuario extends Conexao
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

        return $nome;
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
        $this->senha = strtolower($this->nome);
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

    public function cadastra_usuario()
    {

        if ($this->getNome() != null && $this->getEmail() != null) {
            echo 'Foto: ' . $this->getFoto() . '<br>';
            try {
                $insert = $this->conexao()->prepare("INSERT INTO usuarios (nome_usuario, area_atuaID, instituicaoID, foto_usuario, senha_usuario, email_usuario)
                    VALUES (:nome, :areaAtua, :instituto, :foto, :senha, :email)"
                );
                $insert->bindValue(':nome', $this->getNome(), PDO::PARAM_STR);
                $insert->bindValue(':areaAtua', $this->getArea(), PDO::PARAM_STR);
                $insert->bindValue(':instituto', $this->getInstituicao(), PDO::PARAM_STR);
                $insert->bindValue(':foto', $this->getFoto(), PDO::PARAM_STR);
                $insert->bindValue(':senha', $this->getSenha(), PDO::PARAM_STR);
                $insert->bindValue(':email', $this->getEmail(), PDO::PARAM_STR);

                if ($insert->execute()) {
                    echo 'Inserido com Sucesso';
                    $this->moveFoto();
                    header('location: ../view/login.php');
                } else {
                    echo 'Não cadastrado, Favor Tentar Novamente!';
                }
                // header('location: ../view/login.php');
            } catch (PDOException $e) {
                echo 'Erro: ' . $e->getMessage();
            }
        } else {
            echo 'Vazio';
        }
    }
}

$cadastrar = new CadastrarUsuario;
$cadastrar->setNome($_POST['nome']);
$cadastrar->setArea($_POST['area_atuacao']);
$cadastrar->setInstituicao($_POST['instituicao']);
$cadastrar->setEmail($_POST['email']);
$cadastrar->setFoto();
$cadastrar->setSenha();
$cadastrar->cadastra_usuario();
