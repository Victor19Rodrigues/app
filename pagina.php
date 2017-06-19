<?php
	require 'DAO.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<meta name=viewport content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="pagina.css">
		<title>Funcionários</title>
	</head>
	<body>
		<div class="container">
			<p class="botaoExit">
				<a name = "sair" href="sair.php"><button class="btn btn-default btn-danger">Sair</button></a>
			</p>
			<h1>Funcionários <small>Página de Funcionários</small></h1>
			<hr>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Email</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
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
				</tbody>
			</table>
			<p class="botaoAdd">
				<a href="adicionar.php"><button class="btn btn-lg btn-primary">Adicionar</button></a>
			</p>
		</div>
	</body>
</html>
