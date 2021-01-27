<?php
	session_start();
		
	// Apaga o usuário do banco! 
	include("dados_conexao.php"); // carrega os dados da conexão
	try { // tenta fazer a conexão e executar o DELETE
		$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha); //istancia a classe PDO
		$comandoSQL = "DELETE FROM tb_usuarios WHERE nick = '" . $_SESSION['nick_sala'] . "'";
		$grava = $conecta->prepare($comandoSQL); //testa o comando SQL
		$grava->execute(array()); 			
	} catch(PDOException $e) { // casso retorne erro
		echo('Deu erro: ' . $e->getMessage()); 
	}
	
	$_SESSION = array(); // Apaga todas as variáveis da sessão
	session_destroy();   // Destroi a sessão
	// Carrega os dados da conexão!
	
	header("Location: index.php"); //redirecionamento!
?>