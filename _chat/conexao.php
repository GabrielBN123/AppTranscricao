<?php
 // Dados do servidor usando Vertrigo.
 $servidor = 'localhost';
 $usuario = 'root';
 $senha = 'root';
 $banco = 'database_chat'; 

 if ($_POST)
	{
		try 
		{   // tenta fazer a conexão e executar o INSERT
			$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha); //istancia a classe PDO
			$comandoSQL = "INSERT INTO tb_usuarios (nome_usuario) VALUES ('$_POST[nome_pessoa]') WHERE NOT EXISTS ( SELECT * FROM tb_usuarios WHERE nome_usuario = $_POST[nome_pessoa]);";
			$grava = $conecta->prepare($comandoSQL); //testa o comando SQL
			$grava->execute(array()); 
			// recebe o nome inserido, e envia para session
			$_SESSION['nick_sala'] = $_POST['nome_pessoa'];
			$_SESSION['cor_nick'] = $_POST['cor'];
			header("Location: sala_bate_papo.php"); //redirecionamento
		} catch(PDOException $e) { // casso retorne erro
			echo('Deu erro: ' . $e->getMessage()); 
		}
	} 
?>
