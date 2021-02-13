<?php

require("conexao.php");

class Formulario extends Conexao
{
    private $select = null;

    public function quantidadeFormularios()
    {

        $instituicaoID = $_SESSION['instituicao'];

        $select = $this->con()->prepare('SELECT * FROM formulario where instituicaoID = :instituicaoID');

        $select->bindValue(':instituicaoID', $instituicaoID, PDO::PARAM_INT);

        $select->execute();

        $count = $select->rowCount();

        if ($count > 0) {
            $count = 1;
            foreach ($select as $key) {
                // $key['formID'];
                echo "<option selected value={$key['formID']}>{$count}</option>";
                $count++;
            }
        } else {
            echo "<option selected value='null'>Não há nenhum Registro há ser exibido</option>";
            // include '../view/.php';
            // echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
        }
    }

    public function getDados()
    {
        return $this->select->execute();
    }

    public function exibirDados($formID)
    {
        $instituicaoID = $_SESSION['instituicao'];

        $select = $this->con()->prepare('SELECT * FROM formulario where instituicaoID = :instituicaoID and formID = :formID');

        $select->bindValue(':instituicaoID', $instituicaoID, PDO::PARAM_INT);
        $select->bindValue(':formID', $formID, PDO::PARAM_INT);
        

        $select->execute();

        $count = $select->rowCount();

        if ($count > 0) {
            include '../view/forms/exibicaoTranscricao.php';
        } else {
            // include '../view/.php';
            echo '<h1 style="text-align: center; margin: 10vw 0"> Não há nenhum Registro </h1>';
        }
    }

}
