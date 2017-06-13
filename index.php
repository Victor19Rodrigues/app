<?php
	require 'DAO.php';
?>
<link rel="stylesheet" type="text/css" href="style.css">
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
			foreach($sql->fetchAll() as $usuario){
				echo '<tr>';
					echo '<td>'.$usuario['nome'].'</td>';
					echo '<td>'.$usuario['email'].'</td>';
					echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="">Excluir</a></td>';				
				echo '</tr>';

			}
		}
	?>
</table>