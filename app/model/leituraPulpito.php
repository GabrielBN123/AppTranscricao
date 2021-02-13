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

        // echo '<br>' . $instituicaoID . '<br>';

        $select = $this->con()->prepare('SELECT * FROM formulario where instituicaoID = :instituicaoID');

        $select->bindValue(':instituicaoID', $instituicaoID, PDO::PARAM_INT);

        $select->execute();

        $count = $select->rowCount();


        if($count > 0){
            include '../view/forms/leituraDadosForm.php';
        }
        else{
            // include '../view/.php';
            echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
        }
    }
}
$FormLeitura = new LeituraFormulário;
$FormLeitura->selectDados();
