<?php


class Conexao
{
    // temporario




    // temporario

    // tipo procedural
    // protected $conexao = mysqli_connect("$host", "$user", "$password", "$nome_base");
    // protected $charset = mysqli_set_charset($conexao, "utf8");

    // tipo orientado a obj
    // Conectar banco de dados
    // protected $conect = new mysqli($host, $user, $password, $nome_base);


    public function conectar_banco()
    {
        $host = 'localhost:8090';
        $nome_base = 'transc_bd';
        $user = 'root';
        $password = 'root';

        try {
            $conexao = new PDO("mysql:host = $host; dbname=$nome_base", $user, $password);

            // Teste de Select para retornar os dados 
            // $select_all_user = $conexao->query('SELECT * from usuarios');

            // foreach ($select_all_user as $key) {
            //     echo 'userID: ' . $key['userID'] . '<br>';
            //     echo  'nome_usuario: ' . $key['nome_usuario'] . '<br>';
            //     echo  'sobrenome_usuario: ' . $key['sobrenome_usuario'] . '<br>';
            //     echo  'area_atuaID: ' . $key['area_atuaID'] . '<br>';
            //     echo  'foto_usuario: ' . $key['foto_usuario'] . '<br>';
            //     echo  'senha_usuario: ' . $key['senha_usuario'] . '<br>';
            //     echo  'data_cadastro: ' . $key['data_cadastro'] . '<br>';
            // }
        } catch (PDOException $e) {
            echo "erro: " . $e->getMessage() . "<br>";
        }

        return $conexao;
    }
}
// $teste = new Conexao;
// $teste->conectar_banco();