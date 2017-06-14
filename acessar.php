<?php

session_start();

if(isset($_POST['email']) && !empty($_POST['email'])){
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$dsn = "mysql:dbname=user;host=localhost";
	$dbuser = "root";
	$dbpass = "bel120508";

	try{

		$pdo = new PDO($dsn, $dbuser, $dbpass);

		$sql = "SELECT *FROM login WHERE email = '$email' AND senha = '$senha'";
		$sql = $pdo->query($sql);

		if($sql->rowCount() > 0){
			$dado = $sql->fetch(); //pega a primeira informação

			$_SESSION['id'] = $dado['id'];

			header("Location: pagina.php");

		}

	}catch(PDOException $e){
		echo "Falhou a conexão: ".$e->getMessage();
	}
}



?>



<form method="POST">
	Email: <input type="text" name="email"><br><br>
	Senha: <input type="password" name="senha"><br><br>

	<input type="submit" name="Entrar">
</form>