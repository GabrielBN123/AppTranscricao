<?php
session_start(); //deve ser o primeiro codigo php da sua página
include("conexao.php");
?>

<!DOCTYPE html>
<html>

<head>
	<title>Chat</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body style="font-family:Open Sans;">
	<div class="flex">
		<div class="box">
			<div class="well " align="center">
				<h1><strong>Chat</h1>
			</div>
			<form method="post">
				<div class="panel panel-success">
					<div class="panel-heading" align="center"><b><i>Preencha os campos</i></b></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<label for="nome">Nome:</label>
								<input type="text" id="nome" name="nome_pessoa" class="form-control" size="25" required> <br />
							</div>
							<div class="col-md-12 col-lg-6">
								<label for="sobrenome">Sobrenome:</label>
								<input type="text" id="sobrenome" name="sobrenome_pessoa" class="form-control" size="45" required> <br />
							</div>
							<div class="col-md-12 p-0 mb-5 text-center">
								<div class="col-lg-4 mb-5">
									<i><b>Escolha um cor:</b></i>
									<input type="color" class="form-control form-control-color col-md-4" name="cor">
								</div>
							</div>
							<div class="text-center mt-5">
								<button type="submit" class="btn btn-success p-5"> Entrar <span class="glyphicon glyphicon-log-in"></span> </button>
							</div>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
		</div>
		</form>
	</div>
	</div>


	<style>
		* {
			margin: 0px;
			padding: 0px;
		}

		body {
			background-color: #092F5F;
		}

		.flex {
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
		}

		.box {
			width: 500px;
			height: 500px;
		}
	</style>
</body>

</html>