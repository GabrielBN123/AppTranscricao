<?php

require('conexao.php');
//namespace app\model\Conexao;

class LeituraFormulário extends Conexao
{
    private $idForm = null;
    private $select = null;

    public function setID($idForm)
    {
        $this->idForm = $this->idForm;
    }
    

    public function selectDados()
    {
        $this->select = $this->con()->prepare('SELECT * FROM formulario');
    }

    public function getDados()
    {
        return $this->select->execute();
    }

    public function exibirDados()
    {
        $instituicaoID = $_SESSION['instituicao'];

        $select = $this->con()->prepare('SELECT * FROM formulario where instituicaoID = ' . $instituicaoID);

        $select->execute();

        if(isset($select)){
            include '../view/leitura.php';
        }
        else{
            echo 123;
        }
    }
}
$FormLeitura = new LeituraFormulário;
$FormLeitura->selectDados();
