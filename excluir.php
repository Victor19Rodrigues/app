<?php
	require 'DAO.php';

	if(isset($_GET['id']) && !empty($_GET['id'])){
		$id = addslashes($_GET['id']);

		$sql = "DELETE FROM usuario WHERE id = '$id'";
		$sql = $pdo->query($sql);

		header("Location: index.php");

	}else{
		header("Location: index.php");
	}
?>