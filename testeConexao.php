<?php


class Conexao
{
    protected $host = 'localhost';
    protected $nome_base = 'testeConexao';
    protected $user = 'root';
    protected $password = '';

    public function conectar_banco()
    {
        try {
            $conexao = new PDO("mysql:host = $this->host; dbname='testeConexao'", $this->user, $this->password);

            // // Teste de Select para retornar os dados 
            // $select_all_user = $conexao->query('SELECT * from usuarioteste');

            // foreach ($select_all_user as $key) {
            //     echo $key;
            // }
        } catch (PDOException $e) {
            echo "erro: " . $e->getMessage() . "<br>";
        }

        return $conexao;
    }
}
$teste = new Conexao;
$teste->conectar_banco();