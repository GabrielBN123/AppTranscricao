<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pulpito_model extends Conexao
{

    public function __construct()
    {
        // parent::__construct();
    }

    public function exibe_dados($campoID, $instituicaoID)
    {
        try {
            $select = $this->con()->prepare('SELECT :coluna FROM formulario where instituicaoID = :instituicaoID and transcricao_ok = 1 ORDER BY formID DESC;');

            $select->bindParam(':instituicaoID', $instituicaoID, PDO::PARAM_INT);
            $select->bindParam(':coluna', $campo, PDO::PARAM_STR);

            $select->execute();

            if ($select->rowCount() > 0) {
                // include "../view/leitura_pulpito/$arquivo.php";
                foreach ($select as $fields) {
                    if ($fields[$campoID] != null || '') {
                        echo '<p class="py-3 px-2 border border-primary rounded upper_pulpito" style="text-align: justify;">';
                        echo $fields['{$campoID}'];
                        echo '<button class="btn_lido btn_lido_OK"><i class="far fa-check-circle"></i></button>';
                        echo '</p>';
                    } else {
                        echo '<p>Nenhum registro erro</p>';
                    }
                }
            } else {
                echo '<h1 style="text-align: center;"> Não há nenhum Registro </h1>';
            }
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
        // exibe_dados('', $_SESSION['instituicao']);
    }
}
