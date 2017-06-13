<?php
	$dsn = "mysql:dbname=user;host=localhost";
	$dbuser = "root";
	$dbpass = "bel120508";

	try{

		$pdo = new PDO($dsn, $dbuser, $dbpass);

	}catch(PDOException $e){
		echo "Falhou a conexão: ".$e->getMessage();
	}

?>