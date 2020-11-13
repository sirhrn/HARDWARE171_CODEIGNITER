<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
	<head>
	<?php $this->load->view('components/bootstrap'); ?>
	<title>Listagem de Administradores</title>
	</head>
	<?php $this->load->view('components/nav'); ?><br><br>
	<body>
		<h1 class="text-center">Listagem de Clientes</h1>
		<div class="row justify-content-center">
	    <div class="col-auto">
	      <table class="table table-responsive">
					<table class="table table-striped table-dark">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Nome</th>
								<th scope="col">Email</th>
								<th scope="col">Cidade</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($cliente as $clientedata): ?>
								<tr>
									<td><?php echo ($clientedata['id']); ?></td>
									<td><?php echo ($clientedata['nome']); ?></td>
									<td><?php echo ($clientedata['email']); ?></td>
									<td><?php echo ($clientedata['cidade']); ?></td>
									<td><a href="/HARDWARE171_CODEIGNITER/cliente/delete/<?php echo ($clientedata['id']); ?>">
									<button class="btn btn-danger">Excluir</button></a></td>
									<td><a href="/HARDWARE171_CODEIGNITER/cliente/edit/<?php echo ($clientedata['id']); ?>">
									<button class="btn btn-warning">Editar</button></a></td>
								</tr>
							<?php endforeach; ?>;
						</tbody>
					</table>
	      </table>
	    </div>
	  </div>
	</body>
	<?php $this->load->view('components/footer'); ?>
</html>
