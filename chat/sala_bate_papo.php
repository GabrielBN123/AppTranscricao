<?php
	session_start(); //-> inicia a sessão
	// As sessões em PHP sempre devem ser iniciadas no ínicio do código. Não esqueça!
?>

<!DOCTYPE html>
<html>
<head>
  <title>Chat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/css.css">
  <script src="../assets/js/jquery-3.5.1.min.js"></script>
  
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">   -->
</head>

<body style="font-family:Open Sans;">


	<!-- Aqui, o iframe é a melhor opção do que o include por causa do reload da página -->
	<iframe src="conversas.php" style="width:100%; height:450px"></iframe>
	<?php 
		//carrega o envio de mensagens
		include("enviar_mensagem.php"); 
	?>

</body>
</html>
