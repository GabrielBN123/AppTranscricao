<?php
// Carrega os dados da conexão!
include("dados_conexao.php");

if ($_POST) //Testa se o botão de submit foi pressionado!
{
	try { // tenta fazer a conexão e executar o INSERT
		$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha); //istancia a classe PDO
		$comandoSQL = "INSERT INTO tb_mensagens (de, para, mensagem) VALUES ('$_POST[txt_de]', '$_POST[txt_para]', '$_POST[txt_mensagem]');";
		$grava = $conecta->prepare($comandoSQL); //testa o comando SQL
		$grava->execute(array());
	} catch (PDOException $e) { // casso retorne erro
		echo ('Deu erro: ' . $e->getMessage());
	}
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form method="post" class="form-group col-md-12">
				<div class="row">
					<!-- <div class="form-group col-md-3"> -->
					<!-- <label for="txt_de"> De: </label> -->
					<!-- Use o atributo readyonly para proibir a digitação pelo usuário -->
					<!-- <input type="text" class="input_de" name="txt_de" readonly required value="<?php echo $_SESSION['nick_sala'];  ?>" readonly> -->
					<!-- </div> -->
					<?php
					try {
						$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
						$stmt = $conecta->query("SELECT nome_usuario FROM tb_usuarios");
						$user = $stmt->fetch();
					} catch (PDOException $erro) {
						echo ("Errrooooo! foi esse: " . $erro->getMessage());
					}

					?>
					<div class="form-group col-md-12">
						<select list="txt_para" name="txt_para" class="form-select" aria-label=".form-select-md example" />
						<option value="">Para:</option>
						<?php
						// carrega a lista de acordo com o registros da tabela.
						foreach ($user as $nome_usuario) {

							echo "<option value='$nome_usuario'>$nome_usuario</option>";
						}
						?>
						</select>
					</div>
				</div>

				<div class="col-md-12 input-group">
					<span class="input-group-text" id="basic-addon1">Digite sua Mensagem: </span>
					<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
					<!-- <input type="text" class="input-group-text" id="txt_mensagem" name="txt_mensagem" required> -->
					<button type="submit" class="btn btn-success"> Enviar </button>
				</div>


		</div>
		<div class="col-md-2">
			<a href="sair.php">
				<button type="button" class="btn btn-danger"> Sair </button>
			</a>
		</div>
	</div>
</div>
<style>
	.input_de {
		border: none;
		font-size: 12pt;
		font-family: arial, sans-serif;
	}
</style>

</form>