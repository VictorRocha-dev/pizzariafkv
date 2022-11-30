<?php
session_start();
include_once("../../php/conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Editar</title>	
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../../css/editar.css">	
	</head>
	<body>
		<a href="index.php" id="voltar">Voltar</a><br>
		<h1>Editar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<div class="edit">
		<form method="POST" action="proc_edit_usuario.php">
			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $row_usuario['nome']; ?>"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu melhor e-mail" value="<?php echo $row_usuario['email']; ?>"><br><br>

			<label>Nascimento: </label>
			<input type="text" name="nascimento" placeholder="Digite data de nascimento" value="<?php echo $row_usuario['data_nasc']; ?>"><br><br>

			<label>Endereço: </label>
			<input type="text" name="endereco" placeholder="Digite o endereço" value="<?php echo $row_usuario['endereco']; ?>"><br><br>

			<label>Bairro: </label>
			<input type="text" name="bairro" placeholder="Digite o bairro" value="<?php echo $row_usuario['bairro']; ?>"><br><br>

			<label>Cidade: </label>
			<input type="text" name="cidade" placeholder="Digite a cidade" value="<?php echo $row_usuario['cidade']; ?>"><br><br>

			<label>CEP: </label>
			<input type="text" name="cep" placeholder="Digite o cep" value="<?php echo $row_usuario['cep']; ?>"><br><br>

			<label>UF: </label>
			<input type="text" name="uf" placeholder="Digite o UF" value="<?php echo $row_usuario['uf']; ?>"><br><br>

			<label>CPF: </label>
			<input type="text" name="cpf" placeholder="Digite o CPF" value="<?php echo $row_usuario['cpf']; ?>"><br><br>

			<label>Admin: (0 = Usuario) - (1 = Admnistrador)</label>
			<input type="text" name="admin" placeholder="Digite se é admin" value="<?php echo $row_usuario['admin']; ?>"><br><br>
			
			<input type="submit" value="Editar"  id="enviar">
		</form>
		</div>

	</body>
</html>