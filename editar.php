<?php
	require 'DAO.php';

	$id = 0;	

	if(isset($_GET['id']) && !empty($_GET['id'])){

		$id = addslashes($_GET['id']);
	}

	if(isset($_POST['nome']) && !empty($_POST['nome'])){
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);

		$sql = "UPDATE usuario SET nome = '$nome', email = '$email' WHERE id = '$id'";
		$sql = $pdo->query($sql);

		header("Location: pagina.php");
	}	

	$sql = "SELECT *FROM usuario WHERE id = '$id'";
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0){
		$dado = $sql->fetch(); //retorna somente um resultado, já que um usuario possui somente um id
	}else{
		header("Location: pagina.php");
	}
?>

<form method="POST">
	Nome: <input type="text" name="nome" value="<?php echo $dado['nome'];?>"><br><br>
	Email: <input type="text" name="email" value="<?php echo $dado['email'];?>"><br><br>

	<input type="submit" value="Atualizar">
</form>