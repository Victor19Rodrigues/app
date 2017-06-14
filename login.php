<?php
	session_start();

	if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
		header("Location: index.php");
	}else{
		header("Location: acessar.php");
	}
?>
