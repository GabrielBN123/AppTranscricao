<?php

require 'conexao.php';

class Opcoes extends Conexao{

    public function getListFunctions(){
        $stmt = $this->con()->prepare('select * from campo');
        $stmt->execute();
        $dados = $stmt->fetchAll();
        foreach($dados as $value){
            echo "<option selected value={$value['campoID']}>{$value['nome_campo']}</option>";
        }
    }

    public function getListInstituicao(){
        $stmt = $this->con()->prepare('select * from instituicao');
        $stmt->execute();
        $dados = $stmt->fetchAll();
        foreach($dados as $value){
            echo "<option selected value={$value['instituicaoID']}>{$value['decricao_instituicao']}</option>";
        }
    }

}

/*
require('conexao.php');
//namespace app\model\Conexao;

class exibicaoOpcao extends Conexao
{
    private $dadosSelectINST = null;
    private $dadosSelectCAMP = null;

    public function selectCampo()
    {
        $this->dadosSelectCAMP = $this->con()->prepare('SELECT * FROM campo');

        //return $this->dadosSelectCAMP;
    }

    public function executaSelectCAMP ()
    {
        $this->selectCampo();

        return $this->dadosSelectCAMP->execute();

    }

    public function opcoesCampo()
    {
        $this->executaSelectCAMP();

        foreach ($this->dadosSelectCAMP as $chaveCampo) {
            echo '<option selected value=" ' . $chaveCampo['campoID'] . '" >' . $chaveCampo['descricao_campo'] . ' </option>';
        }
    }
    
    public function selectInstituicao()
    {
        $this->dadosSelectINST = $this->con()->prepare('SELECT * FROM instituicao');

        //return $this->dadosSelectINST;
    }

    public function executaSelectINST ()
    {
        $this->selectInstituicao();

        return $this->dadosSelectINST->execute();

    }

    public function opcoesInstituicao()
    {
        $this->executaSelectINST();

        foreach ($this->dadosSelectINST as $chaveInst) {
            echo '<option selected value=" ' . $chaveInst['instituicaoID'] . '" >' . $chaveInst['nomeInstituicao'] . ' </option>';
        }
        // return $this->dadosSelect;
    }
}
$exibir = new exibicaoOpcao;
*/