<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<title>Listagem de Administradores</title>
	</head>
	<body>
		<h1>Listagem de administradores</h1>
			<table class="table table-striped table-dark">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Email</th>
						<th scope="col">Data da Criação</th>
						<th scope="col">Excluir</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($admin as $admindata): ?>
						<tr>
							<td><?php echo ($admindata['id']); ?></td>
							<td><?php echo ($admindata['email']); ?></td>
							<td><?php echo ($admindata['timestamp']); ?></td>
							<td><a href="/hardware171_laravel/admin/delete/<?php echo ($admindata['id']); ?>"><button>Excluir</button></a></td>							
						</tr>
					<?php endforeach; ?>;
				</tbody>
			</table>
	</body>
</html>
