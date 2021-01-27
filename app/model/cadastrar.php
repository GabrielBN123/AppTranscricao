<?php

require("conexao.php");
// $_FILES é utilizada para a leitura de dados dos arquivos que serão enviados para o servidor. 
// pode destacar os parâmetros “name”, “type”, “size” e “tmp_name”, 
// para passar as informações do nome, tipo, tamanho e um local temporário que é criado quando o arquivo é enviado.

class CadastrarUsuario extends Conexao
{
    // variavel da classe Conexao
    // protected $conexao = $this->conect;

    public function getEmail_usuario()
    {
        $nome = 'nomeTeste@gmail.com';

        return $nome;
    }

    public function getNome_usuario()
    {
        $nome = 'Nome';

        return $nome;
    }

    public function getSobrenome_usuario()
    {
        $sobrenome = 'Teste';

        return $sobrenome;
    }

    public function getArea_atua()
    {

        $area_atua = 1;

        return $area_atua;
    }

    public function getFoto()
    {

        $foto = 'null';

        return $foto;
    }


    public function setSenha()
    {
        $senha = 'senha123';

        return $senha;
    }

    public function getInstituicao()
    {
        $instituicao = 1;

        return $instituicao;
    }


    public function cadastra_usuario()
    {
        // $Conexao = this->conectar_banco;

        echo $this->getEmail_usuario();
        echo '<br>' . $this->getNome_usuario();
        echo '<br>' . $this->getSobrenome_usuario();
        echo '<br>' . $this->getArea_atua();
        echo '<br>' . $this->getFoto();
        echo '<br>' . $this->setSenha();
        echo '<br>' . $this->getInstituicao();

        try {
            $conexao = $this->conectar_banco();
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }



        // if (isset($_POST)) {

        //     $nome_pessoa = $_POST['nome'];
        //     $area_atua = intval($_POST['area_atuacao']);
        //     $imagem = $_FILES['Foto'];
        //     $senha =  strtolower(preg_replace('/\s+/', '', $_POST['nome']) . '123');

        //     $verificar = "SELECT nome_usuario FROM usuarios where nome_usuario = $nome_pessoa";



        //     // $verificar = $conexao->query($verificar);

        //     if ($result_select = $conexao->query("SELECT * FROM usuarios where nome_usuario = '$nome_pessoa'")) {

        //         if ($result_select->num_rows > 0) {
        //             echo "registros iguais a $nome_pessoa: " . $result_select->num_rows;
        //         } else {

        //             // Free result set
        //             $result_select->free_result();

        //             if (!empty($imagem["name"])) {

        //                 $error = array();
        //                 // Verifica se o arquivo é uma imagem
        //                 if (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem["type"])) {
        //                     $error[1] = "Isso não é uma imagem.";
        //                 }

        //                 // Pega as dimensões da imagem
        //                 $dimensoes = getimagesize($imagem["tmp_name"]);

        //                 // Se não houver nenhum erro
        //                 if (count($error) == 0) {

        //                     // Pega extensão da imagem
        //                     preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);

        //                     // Gera um nome único para a imagem
        //                     $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        //                     // Caminho de onde ficará a imagem
        //                     $caminho_imagem = "../assets/img/foto_usuario/" . $nome_imagem;

        //                     // Faz o upload da imagem para seu respectivo caminho
        //                     move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

        //                     $inserir  = "INSERT INTO usuarios (nome_usuario, area_atuaID, foto_usuario, senha_usuario) VALUES ('$nome_pessoa', $area_atua, '$nome_imagem', '$senha')";
        //                     // Insere os dados no banco
        //                     $insert = $conexao->query($inserir);

        //                     // Se os dados forem inseridos com sucesso
        //                     if ($insert) {
        //                         echo "Você foi cadastrado com sucesso.";
        //                         header('location: ../index.php');
        //                     } else {
        //                         echo 'erro de insert <br>';
        //                         var_dump($insert);
        //                         // header('location: ../views/cadastro.php');
        //                     }
        //                 }
        //                 if (count($error) != 0) {
        //                     foreach ($error as $erro) {
        //                         echo $erro . "<br />";
        //                     }
        //                 }
        //             } else {
        //                 echo "erro de imagem";
        //             }
        //         }
        //     } else {
        //         // header('location: cadastro.php');
        //         var_dump($result_select);
        //         // echo "Returned rows are: " . $result_select->num_rows;
        //         echo "<br> já existe registro";
        //     }
        // } else {
        //     echo "Erro de POST";
        // }
    }
}

$cadastrar = new CadastrarUsuario;
$cadastrar->cadastra_usuario();

/**


// $result_select = mysqli_query($this->conexao, $verificar);

// $result_select = mysqli_query($this->conexao, $verificar);

// $result = $this->conexao->query($verificar);
// $stmt_verifica = mysqli_prepare($this->conexao, $verificar);
// mysqli_stmt_execute($stmt_verifica);


// if ($this->imagem != "none") {
//     $fp = fopen($this->imagem, "rb");
//     $conteudo = fread($fp, $this->tamanho_img);
//     $conteudo = addslashes($conteudo);
//     fclose($fp);
// }
// $stmt = mysqli_prepare($this->conexao, $queryInsercao);

 */

/**

// $query_verifica = "INSERT INTO usuarios(nome_usuario, area_atuaID, foto_usuario, nome_foto, tamanho_foto, tipo_foto, senha_usuario) 
//     SELECT x.nome_usuario FROM (SELECT 'Pedro' nome_usuario) x WHERE NOT EXISTS
//     (SELECT 1 FROM usuarios us WHERE us.nome_usuario = x.user_1AND r.user_2 = x.user_2)";

// $queryInsercao = "INSERT INTO usuarios (nome_usuario, area_atuaID, foto_usuario, nome_foto, tamanho_foto, tipo_foto, senha_usuario) VALUES (?, ?, ?, ?, ?, ?, ?)";

// $stmt = mysqli_prepare($conexao, $queryInsercao);

// mysqli_stmt_bind_param($stmt, "sssssss", $valr_01, $valr_02, $valr_03, $valr_04, $valr_05, $valr_06, $valr_07);

// $valr_01 = $nome_pessoa;
// $valr_02 = $area_atua;
// $valr_03 = $imagem;
// $valr_04 = $nome_img;
// $valr_05 = $tamanho_img;
// $valr_06 = $tipo_img;
// $valr_07 = $senha;

// mysqli_stmt_execute($stmt);

// mysqli_stmt_close($stmt);

// mysqli_close($conexao);

// header('location: ../index.php');
 */
