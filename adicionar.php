<?php
	require 'DAO.php';

	if(isset($_POST['nome']) && !empty($_POST['nome'])){
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']); //proteção
		$senha = addslashes($_POST['senha']);

		$sql = "INSERT INTO usuario SET nome = '$nome', email = '$email', senha = '$senha'";
		$sql = $pdo->query($sql);

		header("Location: index.php");
	}
?>


<form method="POST">
	Nome: <input type="text" name="nome"><br><br>
	Email: <input type="text" name="email"><br><br>
	Senha: <input type="password" name="senha"><br><br>

	<input type="submit" value="Cadastrar">
</form>