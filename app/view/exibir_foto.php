<?php
require("../controller/conexao.php");
// ainda não concluiodo
// $id_imagem = $_GET[‘codigo’];
// $querySelecionaPorCodigo = "SELECT codigo,
// imagem FROM tabela_imagens WHERE codigo = $id_imagem";
// $resultado = mysql_query($querySelecionaPorCodigo);
// $imagem = mysql_fetch_object($resultado);
// Header( "Content-type: image/gif");
// echo $imagem->imagem;

ALTER TABLE `usuarios` ADD `senha_usuario` VARCHAR(25) NOT NULL DEFAULT '123456' AFTER `tipo_foto`;