<?php

	if(isset($_POST['submit']))
		{	
			// echo('Nome: ' . $_POST['nome']);
			// echo('<br>');
			// echo('E-mail: ' . $_POST['email']);
			// echo('<br>');
			// echo('Telefone: ' . $_POST['telefone']);
			// echo('<br>');
			// echo('Sexo: ' . $_POST['genero']);
			// echo('<br>');
			// echo('Data: ' . $_POST['data_nascimento']);
			// echo('<br>');
			// echo('Cidade: ' . $_POST['cidade']);
			// echo('<br>');
			// echo('Estado: ' . $_POST['estado']);
			// echo('<br>');
			// echo('Endereço: ' . $_POST['endereço']);
			// echo('<br>');


			include_once('config.php');

			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$telefone = $_POST['telefone'];
			$sexo = $_POST['genero'];
			$data = $_POST['data_nascimento'];
			$cidade = $_POST['cidade'];
			$estado = $_POST['estado'];
			$endereco = $_POST['endereço'];

			$result = mysqli_query($conexao, "INSERT INTO usuários(nome, email, telefone, genero, data_nasc, cidade, estado, endereco) VALUES ('$nome', '$email', '$telefone', '$sexo', '$data', '$cidade', '$estado', '$endereco')");

		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="box">
		<form action="formulario.php" method="POST">
			<fieldset>
				<legend><b>Formulário de Clientes</b></legend>
				<br><br>
					<div class="inputBox">
						<input type="text" name="nome" id="nome" class="inputUser" required>
						<label for="nome" class="labelInput">Nome completo: </label>
					</div>
					<br><br>
					<div class="inputBox">
						<input type="text" name="email" id="email" class="inputUser" required>
						<label for="email" class="labelInput">E-mail: </label>
					</div>
					<br><br>
					<div class="inputBox">
						<input type="tel" name="telefone" id="telefone" class="inputUser" required>
						<label for="telefone" class="labelInput">Telefone: </label>
					</div>
					<br>
					<p>Sexo: </p>
					<input type="radio" name="genero" value="feminino" required>
					<label for="feminino">Feminino</label>
					<br><br>
					<input type="radio" name="genero" value="masculino" required>
					<label for="masculino">Masculino</label>
					<br><br>
					<input type="radio" name="genero" value="outro" required>
					<label for="outro">Outro</label>
					<br><br>
					<div class="inputBox">
						<label for="data_nascimento"><b>Data de nascimento: </b></label>
						<input type="date" name="data_nascimento" id="data_nascimento" required>
					</div>
					<br><br>
					<div class="inputBox">
						<input type="text" name="cidade" id="cidade" class="inputUser" required>
						<label for="cidade" class="labelInput">Cidade: </label>
					</div>
					<br><br>
					<div class="inputBox">
						<input type="text" name="estado" id="estado" class="inputUser" required>
						<label for="estado" class="labelInput">Estado: </label>
					</div>
					<br><br>
					<div class="inputBox">
						<input type="text" name="endereço" id="endereço" class="inputUser" required>
						<label for="endereço" class="labelInput">Endereço: </label>
					</div>
					<br><br>
					<input type="submit" name="submit" id="submit">
			</fieldset>
		</form>
	</div>
</body>
</html>