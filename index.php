<?php
	require 'DAO.php';
?>

<link rel="stylesheet" type="text/css" href="style.css">
<a href="adicionar.php">Adicionar novo usuário</a>
<title>CONTROLE DE USUÁRIOS</title>
<table>
	<tr>
		<th>Nome</th>
		<th>Email</th>
		<th>Ações</th>
	</tr>
	<?php
		$sql = "SELECT *FROM usuario";
		$sql = $pdo->query($sql);

		if($sql->rowCount() > 0){
			foreach($sql->fetchAll() as $usuario){ //fetchAll (pega tudo) percorre todo o banco
				echo '<tr>';
					echo '<td>'.$usuario['nome'].'</td>';
					echo '<td>'.$usuario['email'].'</td>';
					echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> - 
					<a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';				
				echo '</tr>';

			}
		}
	?>
</table>