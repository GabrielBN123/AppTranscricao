<?php

require("conexao.php");
// $_FILES é utilizada para a leitura de dados dos arquivos que serão enviados para o servidor. 
// pode destacar os parâmetros “name”, “type”, “size” e “tmp_name”, 
// para passar as informações do nome, tipo, tamanho e um local temporário que é criado quando o arquivo é enviado.
$nome_pessoa = $_POST['nome'];
$area_atua = intval($_POST['area_atuacao']);
$imagem = $_FILES['Foto']['tmp_name'];
$tamanho_img = $_FILES['Foto']['size'];
$tipo_img = $_FILES['Foto']['type'];
$nome_img = $_FILES['Foto']['name'];

if ($imagem != "none") {
    $fp = fopen($imagem, "rb");
    $conteudo = fread($fp, $tamanho_img);
    $conteudo = addslashes($conteudo);
    fclose($fp);
}
$queryInsercao = "INSERT INTO usuarios (nome_usuario, area_atuaID, foto_usuario, nome_foto, tamanho_foto, tipo_foto) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $queryInsercao);

mysqli_stmt_bind_param($stmt, "ssssss", $valr_01, $valr_02, $valr_03, $valr_04, $valr_05, $valr_06);

$valr_01 = $nome_pessoa;
$valr_02 = $area_atua;
$valr_03 = $imagem;
$valr_04 = $nome_img;
$valr_05 = $tamanho_img;
$valr_06 = $tipo_img;

mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);

mysqli_close($conexao);

header('location: ../index.php');