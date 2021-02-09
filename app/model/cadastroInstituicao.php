<?php

require("conexao.php");
// $_FILES é utilizada para a leitura de dados dos arquivos que serão enviados para o servidor. 
// pode destacar os parâmetros “name”, “type”, “size” e “tmp_name”, 
// para passar as informações do nome, tipo, tamanho e um local temporário que é criado quando o arquivo é enviado.

class CadastrarInstituicao extends Conexao
{
    // variavel da classe Conexao
    // protected $conexao = $this->conect;

    private $nomeInstituicao = null;
    private $descricao = null;


    public function setNomeInstituicao($nomeInstituicao)
    {
        $this->nomeInstituicao = $nomeInstituicao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    // passa os dados
    public function getNomeInstituicao()
    {
        return  $this->nomeInstituicao;
    }

    public function getDescricao()
    {
        return  $this->descricao;
    }

    public function cadastra_instituicao()
    {

        if ($this->getNomeInstituicao() != null) {
            try {
                $insert = $this->conexao()->prepare("INSERT INTO instituicao (nomeInstituicao, descricao)
                    VALUES (:nomeInstituicao, :descricao)"
                );
                $insert->bindValue(':nomeInstituicao', $this->getNomeInstituicao(), PDO::PARAM_STR);
                $insert->bindValue(':descricao', $this->getDescricao(), PDO::PARAM_STR);

                if ($insert->execute()) {
                    echo 'Inserido com Sucesso';
                    header('location: ../view/cadastro.php');
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

$cadastrarInst = new CadastrarInstituicao;
$cadastrarInst->setNomeInstituicao($_POST['nomeInstituicao']);
$cadastrarInst->setDescricao($_POST['descricao']);
$cadastrarInst->cadastra_instituicao();