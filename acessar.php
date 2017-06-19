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

<script src="https://use.typekit.net/ayg4pcz.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="login.css">

<div class="container">
    <h1 class="welcome text-center">Funcionários</h1>
        <div class="card card-container">
	        <h2 class='login_title text-center'>Login</h2>
	        <hr>
	            <form method="POST" class="form-signin">
	                <span id="reauth-email" class="reauth-email"></span>
	                <p class="input_title">Email</p>
	                <input type="text" name="email" class="login_box" placeholder="Email" required autofocus>
	              
	                <p class="input_title">Password</p>
	                <input type="password" name="senha" class="login_box" placeholder="Senha" required>
	                <div id="remember" class="checkbox">
	                    <label>
	                        
	                    </label>
	                </div>
	                <button class="btn btn-sm btn-primary" type="submit" href="pagina.php">Login</button>
	            </form><!-- /form -->
        </div><!-- /card-container -->
</div><!-- /container -->

