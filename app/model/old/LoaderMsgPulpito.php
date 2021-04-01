<?php

require_once 'conexao.php';

class LoaderMsgPulpito extends Conexao{

    private $msg = null;

    public function __construct(){
        session_start();
        $instituicaoID = $_SESSION['instituicao'];
        $stmt = $this->con()->prepare('SELECT apresentacaoVisitante FROM formulario where instituicaoID = :instituicaoID and transcricao_ok = 1 ORDER BY formID DESC');
        $stmt->bindParam(':instituicaoID', $instituicaoID, PDO::PARAM_INT);
        $stmt->execute();
        $dados = $stmt->fetchAll();
        foreach($dados as $values){
            $this->msg .= $values;
        }
    }

    public function getMsg(){
        return $this->msg;
    }

}

$obj = new LoaderMsgPulpito();
echo $obj->getMsg();
