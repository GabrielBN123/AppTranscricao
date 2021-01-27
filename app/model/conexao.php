<?php


class Conexao
{
    protected $host = 'localhost:8090';
    protected $nome_base = 'transc_bd';
    protected $user = 'root';
    protected $password = 'root';

    public function conectar_banco()
    {

        try {
            $conexao = new PDO("mysql:host = $this->host; dbname=$this->nome_base", $this->user, $this->password);

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