<?php

require("conexao.php");
// $_FILES é utilizada para a leitura de dados dos arquivos que serão enviados para o servidor. 
// pode destacar os parâmetros “name”, “type”, “size” e “tmp_name”, 
// para passar as informações do nome, tipo, tamanho e um local temporário que é criado quando o arquivo é enviado.

class CadastrarUsuario extends Conexao
{
    // variavel da classe Conexao
    // protected $conexao = $this->conect;

    public function getNome_usuario()
    {
        $nome = $_POST['nome'];

        return $nome;
    }

    public function getEmail_usuario()
    {

        $email = $_POST['email'];

        return $email;
    }

    // public function getSobrenome_usuario()
    // {
    //     if (isset($_POST['sobrenome'])) {
    //         $sobrenome = $_POST['sobrenome'];
    //     } else {
    //         $sobrenome = 'lastName';
    //     }

    //     return $sobrenome;
    // }

    public function getArea_atua()
    {
        $area_atua =  intval($_POST['area_atuacao']);

        return $area_atua;
    }

    public function getFoto()
    {
        $imagem = $_FILES['Foto'];

        $nome_imagem = md5(uniqid(time())) . ".png";

        return $nome_imagem;
    }

    public function moveFoto()
    {
        $imagem = $_FILES['Foto'];
        $nome_imagem = $this->getFoto();

        // Caminho de onde ficará a imagem
        $caminho_imagem = "../../assets/img/foto_usuario/teste/" . $nome_imagem;

        // Faz o upload da imagem para seu respectivo caminho
        move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
    }

    public function setSenha()
    {
        $senha =  strtolower(preg_replace('/\s+/', '', $_POST['nome']));

        return $senha;
    }

    public function getInstituicao()
    {

        // instituicao
        $instituicao =  intval($_POST['instituicao']);

        return $instituicao;
    }


    public function cadastra_usuario()
    {
        // $Conexao = $this->conectar_banco();

        if (isset($_POST)) {
            $nomeUsuario = $this->getNome_usuario();
            // echo '<br>' . $this->getSobrenome_usuario();
            $areaAtua = $this->getArea_atua();
            $instituicao = $this->getInstituicao();
            $foto = $this->getFoto();
            $senha = $this->setSenha();
            $email = $this->getEmail_usuario();
        }

        try {
            $conexao = $this->conectar_banco();
            
            $insert = $conexao->query("INSERT INTO usuarios (nome_usuario, area_atuaID, instituicaoID, foto_usuario, senha_usuario, email_usuario) 
            VALUES ('$nomeUsuario', $areaAtua, $instituicao, '$foto', '$senha',  '$email')");
            // VALUES ('Gabriel', 1, 1, 'foto.png', 'Gabriel',  'gabriel@Hotmail')");
            
            $this->moveFoto();

            header('location: ../view/login.php');
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }
}

$cadastrar = new CadastrarUsuario;
$cadastrar->cadastra_usuario();